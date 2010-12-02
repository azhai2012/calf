<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Supplier {

	/*
	 * 获取供货商列表
	 */
	
    function ajax_set_Mods_supplier($array,$type="DELETE"){
		$result='';
		$array = explode(';',$array);
		switch ($type)
		{
			case "DELETE":{
				
				$id = $array[0];
				$result= DB::query(Database::DELETE,"DELETE FROM users WHERE id=:id",TRUE)
				         ->param(':id',$id);
				        
				echo Kohana::debug((string) $result);  
				
				$result=$result->as_object()->execute();
			}break;
			
			case "INSERT":{
				
				$name=$array[1];
				$email=$array[2];
				$pass=$array[3];
				$create=date('Y-m-d H:i:s');
				$roidid=$array[4];
				
				$result= DB::query(Database::INSERT,"INSERT INTO users (username,email,password,create_login_on,role_id) 
				                             VALUES (:username,:email,:password,:create_login_on,:role_id)",TRUE)
				         ->param(':username',$name)
				         ->param(':email',$email)
				         ->param(':password',md5($pass))
				         ->param(':create_login_on',$create)
				         ->param(':role_id',$roidid)
				          ->as_object()
				         ->execute();
					
			}break;
			
			case "UPDATE":{
				
				$id=$array[0];
		        $name=$array[1];
				$email=$array[2];
				$pass=$array[3];
				$create=date('Y-m-d H:i:s');
				$roidid=$array[4];
				
				$result= DB::query(Database::UPDATE,"UPDATE users SET username=:name,
				         email=:email,password=:password,create_login_on=:create_login_on,
				         role_id=:role_id
				         WHERE id=:id",TRUE)
				         ->param(':id',$id)
				         ->param(':name',$name)
				         ->param(':email',$email)
				         ->param(':password',md5($pass))
				         ->param(':create_login_on',$create)
				         ->param(':role_id',$roidid);				         
				         
			  // echo Kohana::debug((string) $result);
			   $result = $result->as_object()->execute(); 
			           
			}break;
			
		}
		return json_encode($result);
	}
	
	function ajax_get_mods_sup_list($info){
		
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=supmnew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>添加商品</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusup">';
		$result .='</i><span>展会管理</span></h3>';
	  
		$modules= DB::query(Database::SELECT,"
		              SELECT *  
                      FROM suppliers
                      INNER JOIN products ON suppliers.product_id = products.product_id
                      INNER JOIN meets ON suppliers.meet_id = meets.id 
                      WHERE sup_id=:sid and active='Y'
                      ",TRUE)
		          ->param(':sid',$info['ghsid'])
		          ->as_object()
		          ->execute();
		          
		$meet=''; 
		$et='';         
        foreach($modules as $key => $value){
        	$meet=$value->meet_name;
        	$et= $value->meet_end_at;
        	break;
        }	
	
		$result .='<table class="list"><thead>
		<tr><th colspan=5 style="background:#fff;font-weight:normal">当前参加展会名称：'.$meet.'</span></th><th style="background:#fff;font-weight:normal">展会结束日期:</th><th style="background:#fff;font-weight:normal">'.$et.'</th>
		<tr><th>序号</th><th>参会商品名称</th><th>规格</th><th>单位</th><th>生成企业</th><th>预订数量</th><th></th></tr></thead>';
		$result .='<tbody>';
		$i=1;

		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
			$result.= '<td  class="'.$mod.'"><span>'.$value->product_name.'</span></td>';
			$result.= '<td class="'.$mod.'"><span>'.$value->product_spec.'</span></td>';
			$result.= '<td align="center" class="'.$mod.'"><span>'.$value->product_unit.'</span></td>';
			$result.= '<td class="'.$mod.'"><span>'.$value->product_origin.'</span></td>';
			$result.= '<td style="width:30px;" align="center" class="'.$mod.'"><span>0</span></td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons" >
			              <a href="javascript:deleteUserName('.$value->id.');">
                               <span style="top:4px;" class="leftimg">
			                      <i class="img calfimage icon-pic"></i>
			                   </span>
			                   <span>上传图片</span>
			              </a>
			              <a href="javascript:deleteUserName('.$value->id.');">
                               <span style="top:4px;" class="leftimg">
			                      <i class="img calfimage icon-cx"></i>
			                   </span>
			                   <span>促销</span>
			              </a>
			              <a href="javascript:deleteUserName('.$value->id.');">
                               <span style="top:4px;" class="leftimg">
			                      <i class="img calfimage icon-del"></i>
			                   </span>
			                   <span>删除</span>
			              </a>
			          </td>';
			$result.= '</tr>';
			$i++;
		}
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}

    function ajax_get_select_proc_dialog($info){
    	$result  ='';
    	$result .='<h2 class="dialog_title"><span>选择商品</span></h2>';
    	$result .='<div class="dialog_content" >';
        $modules= DB::query(Database::SELECT,"
		              SELECT * FROM products
                      ",TRUE)
		          //->param(':id',$info['ghsid'])
		          ->as_object()
		          ->execute();
    	
    	$result .='<table class="list" id="selectlist">
    	           <thead><th style="width:10px;"><input type="checkbox" id="allchecked" name="allchecked" /></th><th>编号</th><th>商品名称</th><th>规格</th><th>单位</th><th>生产企业</th><th>包装</th></thead>
    	           <tbody>';
    	foreach ($modules as $key=>$value){
    		$result .='<tr>
    		            <td align="center"><input type="checkbox" name="'.$key.' id="'.$key.' value="" /></td>
                        <td>'.$value->product_id.'</td> 
    		            <td>'.$value->product_name.'</td> 
    		            <td>'.$value->product_spec.'</td>
    		            <td>'.$value->product_unit.'</td>
    		            <td>'.$value->product_origin.'</td>
    		            <td>'.$value->product_group.'</td>
    		            <td></td>
    		            <td style="display:none"><a href="javascript:delSelectProc('.$value->product_id.')">删除</a></td>
    		          </tr>';
    	}
    	$result .='</tbody>';
    	$result .='</table>';
    	$result .='</div>';
    	$result .=' <div class="dialog_buttons clearfix">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sups.onSelect(selectlist)" value="确定">
    	             </label>
    	             <label class="uiButton">
    	               <input type="button" name="cancel" value="取消" onclick="closedialog()">
    	             </label>
    	            </div>';
    	return $result;
    }
	
	function ajax_get_mods_sup_new(){
		$result  ='';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=meet">展会管理</a> <span class="ss"> >></span><span class="sf"> 添加商品 </span> </span></h3>
		          <div class="info"></div>
		          <div class="topbox">
		           <div><label><span>参会名称：</span><span class="required">*</span></label></div>
		           <div><label>
		              <div style="float:left"><span>选择商品：</span><span class="required">*</span></div>
		              <div style="float:left;width:320px;background:#fff;" class="ipt"><input style="width:300px;" name="product" id= "product" onkeydown="keyshowdialogs();" value="""/><a class="spipt" style="margin:0;padding:0;width:20px;height:16px;float:right;" onclick="showdialogs();"></a></div><br>
		              </label>
		           </div>';
		$result .='</div>';
        
		
		$result .='<div> 
		           <table class="list" id="meetlist"><thead>
		             <tr><th>编号</th><th>参会商品名称</th><th>规格</th><th>单位</th><th>生产企业</th><th>包装<th><th></th></tr></thead>';
		$result .='<tbody>';    
        $result .=' </tbody>
                    </table>';
        $result .='</div>';
		$result .='<div class="btn">
	               <input name="commit" type="button" value="保存" onclick="AddSupProcs()"  />
	    </div></div>';
		return $result;
	}
	
	
     function ajax_get_admin_users_view($id){

		$result  ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		
		$resultdb= DB::query(Database::SELECT,"SELECT users.*,roles.name FROM users inner join roles on users.role_id=roles.id WHERE users.id=:id",TRUE)
		                 ->param(':id',$id)
				         ->as_object()
				         ->execute();
        foreach ($resultdb as $key=>$value){
        	$_id= $value->id;
        	$name= $value->username;
        	$email=$value->email;
        	$rolename=$value->name;
        	$roleid= $value->role_id;
        	
        }
				         
		$result .='</i><span><a href="/?sk=adu">用户</a> <span class="ss"> >></span> <span class="sf">修改用户</span> </span></h3>
		           <div class="info"></div>
		           <div class="topbox">
		           <div><label><span>用户名称：</span><span class="required">*</span><input name="username" id="username" value="'.$name.'" /></label></div>
		           <div><label><span>邮箱地址：</span><span class="required">*</span><input name="email" id= "email" value="'.$email.'" /></label></div>
		           <div><label><span>登录密码：</span><span class="required">*</span><input type="password"  name="psw" id= "psw" value="" /></label></div>
	               <div><label><span>验证密码：</span><span class="required">*</span><input type="password"  name="apsw" id= "apsw" value="" /></label></div>';
		$result .='</div>';
		$result .='<h4>角色<span class="required">*</span></h4>';
		$result .='<div class="box" id="permissions">';
		$result.= '<fieldset><legend>选择该用户角色</legend>';
		$result .='<div><label><span>用户角色：</span>
		            <select id="roleid" name="roleid"> ';
		
		$resultdb= DB::query(Database::SELECT,"SELECT * FROM roles ",TRUE)
				         ->as_object()
				         ->execute();
				         
        foreach($resultdb as $key => $value){
		      $isSelected = ($roleid=== $value->id)?"selected":"";
		      $result .=' <option '.$isSelected.' value="'.$value->id.'">'.$value->name.'</option>';
		}
		
        $result .='</select></label></div>';
		$result.= '</fieldset>';
		$result .='  <div><a href="/home?sk=adrnew">创建新角色和权限</a></div>';
		$result .='</div>';
		
	    $result .='<div class="btn">
	               <input name="commit" type="button" value="保存" onclick="EditUserName('.$id.')"  />
	    </div></div>';
		return $result;
	}


	 

}
