<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_System {


	function get_system($modname,$params = array()){
		 
		$mods= '';
		$param = $params['param'];
		
		switch ($modname){

			case "sys":{
				$mods = $this->ajax_get_mods_cus_main();

			}break;
			
			/*
			 * 角色
			 */

			case "sysrole":{

				$mods = $this->ajax_get_mods_role_list();

			}break;
			
			case "sysrolemodify":{
				
				$mods = $this->ajax_Set_Model_Role($param,'UPDATE');
				
			}break;
			
			case "sysroleadd":{
				
				$mods = $this->ajax_Set_Model_Role($param,'INSERT');
				
			}break;
			
			case "sysroledel":{
				
				$mod = $this->ajax_Set_Model_Role($param,'DELETE');
				
			}break;
			
			case "sysroletree":{
				$mods = $this->ajax_get_tree_json_list($params['param']['id']);
			}break;

			case "sysrolenew":{
				$mods = $this->ajax_get_add_new_role();
			}break;
			
			case "sysroleview":{
				
			    $mods = $this->ajax_get_mods_role_view_list($params['param']['fl']);

			}break;
	
			/*
			 * 用户
			 */
			case "sysuser":{
				
                $mods = $this->ajax_get_mods_user_list();	
                			
			}break;
			
			case "sysusernew":{
				
				$mods= $this->ajax_get_mods_add_user();
				
			}break;
			
			case "sysuseradd":{			
				$mods= $this->ajax_Set_Model_User($param,'INSERT');
				
			}break;
			
			case "sysuserdel":{
				$mods= $this->ajax_Set_Model_User($param);
			}break;
			
			case "sysusermodify":{
				
				$mods= $this->ajax_get_mods_modify_user($params['param']['fl']);
				
			}break;
			
			case "sysuserupd":{
				
				$mods= $this->ajax_Set_Model_User($param,'UPDATE');
				
			}break;
			
			

		}
		return $mods;
	}

	function ajax_Set_Model_User($array,$type="DELETE"){
	    $result='';
		if (is_array($array)){
			$ary=$array;
		}
		else
		$array = explode(';',$array);	
		
		switch ($type)
		{
			case "DELETE":{
				$id=$ary['id'];
			
				$result= DB::query(Database::DELETE,"DELETE FROM admin_user WHERE user_id=:id",TRUE)->param(':id',$id)
				         ->as_object()->execute();
				$result= DB::query(Database::DELETE,"DELETE FROM admin_role WHERE user_id=:id",TRUE)->param(':id',$id)
				         ->as_object()->execute();
				         
				
			}break;
			
			case "INSERT":{
				
		      $a= explode(';',$ary['data']);
		      $id= $ary['id'];
		    	
			  $result= DB::query(Database::INSERT,"INSERT INTO admin_user (username,email,password,created,is_active)
			                VALUES (:username,:email,:password,:created,:is_active)",TRUE)
			    ->param(':username',$a[0])
				->param(':email',$a[1])
				->param(':password',md5($a[2]))
				->param(':created',date('Y-m-d H:i:s'))
				->param(':is_active',$a[3]);
				
			  $result=$result->as_object()->execute();	
            
			  if (!empty($id))
			  {
			    $result = DB::query(Database::SELECT,"SELECT user_id FROM admin_user WHERE username=:username ",TRUE)
			    ->param(':username',$a[0])->as_object()->execute();
			  
                $users = $result->as_array();
              
                $result= DB::query(Database::DELETE,"DELETE FROM admin_role WHERE user_id=:id",TRUE)
                       ->param(":id",$users[0]->user_id)
                       ->execute();
			  
              
                $result= DB::query(Database::INSERT,"INSERT INTO admin_role (parent_id,user_id,role_type,role_name)
			                VALUES (:parent_id,:user_id,'U',:role_name)",TRUE)
			          ->param(':parent_id',$id)
			          ->param(':user_id',$users[0]->user_id)
			          ->param(':role_name',$a[0])->as_object()->execute();
			  }
				
			}break;
			
			case "UPDATE":{
				
			   $a= explode(';',$ary['data']);
		       $id= $ary['id'];
		    	
			   $result= DB::query(Database::INSERT,"UPDATE admin_user SET 
			                email=:email,
			                password=:password,
			                created=:created,
			                is_active=:is_active
			                WHERE user_id=:id
			                ",TRUE)
				->param(':email',$a[1])
				->param(':password',md5($a[2]))
				->param(':created',date('Y-m-d H:i:s'))
				->param(':is_active',$a[3])
				->param(':id',$id);
				
			  $result=$result->as_object()->execute();

			  
			  $result= DB::query(Database::SELECT,"SELECT * FROM admin_role WHERE user_id=:id",TRUE)
                       ->param(":id",$id)
                       ->as_object()
                       ->execute();
                       
               $result = $result->as_array();      
           
			   if (count($result)>0)
			   {
			     $result = DB::query(Database::UPDATE,"UPDATE admin_role SET parent_id=:pid WHERE user_id=:userid ",TRUE)
			      ->param(':pid',$a[4])
                  ->param(':userid',$id)
			      ->as_object()->execute();
			   }
			   else
			   {
			  	  $result= DB::query(Database::INSERT,"INSERT INTO admin_role (parent_id,user_id,role_type,role_name)
			                VALUES (:parent_id,:user_id,'U',:role_name)",TRUE)
			          ->param(':parent_id',$a[4])
			          ->param(':user_id',$id)
			          ->param(':role_name',$a[0])->as_object()->execute();
			   }
			 
			  
			 	
			}break;
			
			
			
		}
		return json_encode($result);	
		
		
	}
	

	/*
	 * 数据模块
	 */
	function ajax_Set_Model_Role($array,$type="DELETE"){
		$result='';
		if (is_array($array)){
			$ary=$array;
		}
		else
		$array = explode(';',$array);

		switch ($type)
		{
			case "DELETE":{

				$id = $ary['id'];
				
				$result= DB::query(Database::DELETE,"DELETE FROM admin_role WHERE role_id=:id",TRUE)
				->param(':id',$id);
				$result=$result->as_object()->execute();
				
				$result= DB::query(Database::DELETE,"DELETE FROM admin_role WHERE parent_id=:id",TRUE)
				->param(':id',$id);
				$result=$result->as_object()->execute();
				
				$result= DB::query(Database::DELETE,"DELETE FROM admin_rule WHERE role_id=:id",TRUE)
				->param(':id',$id);
				$result=$result->as_object()->execute();		
				
			}break;

			case "INSERT":{
				
             	$rolename = $ary['data'];
             	
             	$result= DB::query(Database::INSERT,"INSERT INTO admin_role (role_name) values (:rolename)",TRUE)
                    ->param(':rolename',$rolename) 
	   			    ->as_object()
				    ->execute();
				
                $result= DB::query(Database::SELECT,"SELECT role_id FROM admin_role WHERE role_name=:rolename",TRUE)
                    ->param(':rolename',$rolename) 
	   			    ->as_object()
				    ->execute();
				    
				$result=$result->as_array();
				$id= $result[0]-> role_id;  
				    
                $f1=explode('|',$ary['res']);
                $ps = 'INSERT INTO admin_rule (role_id,resource_id,role_type,permission) values ';
                foreach ($f1 as $key=>$value){
                    $f2=explode(';',$value);
                    $ps .='(\''.$id.'\',\''.$f2[0].'\',\'G\',\''.$f2[1].'\'),'; 
                }
                $db = Database::instance();
                $result =$db->query(Database::INSERT,substr($ps,0,-1),TRUE);
				    
               
			}break;

			case "UPDATE":{
               
				$id=$ary['id'];
		        $result= DB::query(Database::DELETE,"DELETE FROM admin_rule WHERE role_id=:id ",TRUE)
				->param(':id',$id)				
				->execute();
				$db = Database::instance();
				
				$user=$ary['users'];
				
				if (isset($user) and !empty($user))
				{
		          $result= DB::query(Database::DELETE,"DELETE FROM admin_role WHERE parent_id=:id ",TRUE)
				          ->param(':id',$id)				
				          ->execute();
				          
				 
				  $t01 = $t02 ='';  
				  $sql = 'INSERT INTO admin_role (user_id,parent_id,role_type,role_name) values ';
				  $user = explode(';',substr($user,0,-1));
				  $t01 = '';
				  foreach($user as $key => $value)
				  {
				  	$value = explode(',',$value);
				  	$t01 .=  "'".$value[0]."',"; 		
				    $t02 .= "('".$value[0]."','".$id."','U','".$value[1]."'),";
				  }
				  $t01 = 'DELETE FROM admin_role WHERE user_id IN ('.substr($t01,0,-1).')';
				  $result =$db->query(Database::INSERT,$t01,TRUE);
				  $sql .= $t02;
			      $result =$db->query(Database::INSERT,substr($sql,0,-1),TRUE);
			      
				}
				
				$f1=explode('|',$ary['res']);
                $ps = 'INSERT INTO admin_rule (role_id,resource_id,role_type,permission) values ';
                foreach ($f1 as $key=>$value){
                    $f2=explode(';',$value);
                    $ps .='(\''.$id.'\',\''.$f2[0].'\',\'G\',\''.$f2[1].'\'),'; 
                }
                
               
                $result =$db->query(Database::INSERT,substr($ps,0,-1),TRUE);
		        
			}break;
				


		}
		return json_encode($result);
	}

	function ajax_get_tree_json_list($id){
		
		$results= DB::query(Database::SELECT,"
		              SELECT * FROM admin_role,admin_rule 
		              WHERE admin_role.role_id= admin_rule.role_id and admin_role.role_id=:id                  
                      order by rule_id",TRUE)
	              ->param(':id',$id)->as_object()->execute();

	    return  json_encode($results->as_array());       
		
	}
	
	function ajax_get_role_user_json_list($id){
		
		$results= DB::query(Database::SELECT,"
		              SELECT * FROM admin_role
		              WHERE admin_role.parent_id=:id and role_type='U'                  
                      ",TRUE)
	              ->param(':id',$id)->as_object()->execute();

	    return  json_encode($results->as_array());       
		
	}
	
	/*
	 * 新增角色
	 */
	
	function ajax_get_add_new_role(){

		$result ='<div class="roles">';
		$result .='<div class="contextual"></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>角色列表-- 新增</span></h3>';
	    $result .='<div id="status"></div>
		       <table class="list">
		       <thead>
		        <tr>
		         <th colspan=2 >--- 角色信息</th>
		        <tr> 
		        <td style="width:60px;">角色名称:</td><td>
		           <input class="rid" id="rolename" name="rolename" style="width:400px" value="" >
		           </td></tr>
		       <tr>
			      <th colspan=2 >--- 角色资源</th>
			    </tr>
                </thead>
		        <tbody >
			    <tr><td>角色资源:</td><td><select id="all"  name="all" onchange="Sys.showRes(this)" > 
                    <option value="all" >所有</option>
		           <option value="custom" selected>定制</option> ';
		        $result .=' </select></td></tr>';
			    
           	    $modules =kohana::config('settings')->modules;
           	    
           	    $result.= '<tr class="roletree" style="display:" ><td style="width:60px;"></td>';
			    $result.= '<td><ul class="tree clearfix" style="clear:both; margin-left:15px;">';
                    
			    foreach($modules as $key => $value){
			    	 $k= $value['sk']; 
			         $result.='<li>
			                     <input type="checkbox" id="'.$value['sk'].'" value="'.$value['sk'].'"  />
			                     <label>'.$value['name'].'</label> ';
			                 
			         $result.='<ul>';
                     foreach($value['ct'] as $subkey =>$subvalue){
                       $k1 = $k.'/'.$subvalue['name'];
				       $result.= '<li>
				                    <input type="checkbox" value= "'.$k1.'" />				                    
				                    <label>'.$subkey.'</label>
				                  ';
                        $result.='<ul>';
				        foreach($subvalue['permissons'] as $psubkey =>$psubvalue){
				          $k2 = $k1.'/'.$psubkey; 	 
				          $result.= '<li>
				                        <input type="checkbox" id="rolecheck" name="'.$k2.'" value="'.$k2.'" />
				                        <label>'.$psubvalue.'</label>
				                     </li>';
				        }
				        $result.='</ul>
				        </li>';
				     }
                     $result.= '</ul></li>';
			    }
		
			$result .='</ul></td></tr>
			
			
			</tbody>';
		 
		 $result .='</table></div>
		 <script>
		   $(".list ul.tree").checkTree({
		   });
		 </script>
		 ';
	   $result .=' <div style="padding-top:20px;" class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sys.addRoleName();" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="">
    	             </label>
    	            </div>';

		return $result;
	}
	
    /*
	 * 新增用户 
	 */
	function ajax_get_mods_add_user(){
	    
			$result ='<div class="roles">';
			$result .='<div class="contextual"></div>';
			$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
			$result .='</i><span>用户管理 -- 新增</span></h3>';
            $result .='<div id="status"></div>';
			$result .='<table class="list" >
		               <thead>
		                 <th colspan=2>-- 用户信息</th>
		               </thead>';
			$result .='<tbody>';
			$result .=' <tr><td style="text-align:right;width:70px">用户名称：</td><td><input name="username" id="username" value="" /></td></tr>
			            <tr><td style="text-align:right">Email：</td><td><input name="email" id="email" value="" /></td></tr>
			            <tr><td style="text-align:right">密码：</td><td><input name="psw" id="psw" value="" /></td></tr>
			            <tr><td style="text-align:right">激活状态：</td><td>
			                <select name="active" id="active" > 
			                 <option value="1" selected>激活</option>
			                 <option value="0">锁定</option>';
			
			
			$result .='</select>
			           </td></tr>
		               <tr><table class="list rolelist" >
			            <thead>
			              <tr><th colspan=2>-- 用户角色</th>
                          </tr>
			              <tr>
                          <th>指定</th>
                          <th>角色名称</th></tr>
                        </thead>
                       <tbody>          
			           ';
			 
            $modules= DB::query(Database::SELECT,"
		              SELECT * 
		              FROM admin_role 
		              WHERE parent_id=0
	                  ",TRUE);
		    $modules=$modules->as_object()->execute();
		    $i=0;
	        foreach($modules as $key=>$value)
	        {
	           $mod = ($i%2)?'odd':'even';
		       $result .= '<tr>
		                    <td class="'.$mod.'" style="width:70px">
		                    <input type="radio" name="roles" value="'.$value->role_id.'"  /> </td>
		                    <td class="'.$mod.'">'.$value->role_name.'</td>
		                   </tr>';
		       $i=$i+1;
		    }
	        
			$result .='</tbody>';
			$result .='</table></div>';
			

		 $result .=' <div style="padding-top:20px;" class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sys.AddUser();" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="">
    	             </label>
    	            </div>';
		return $result;
	}
	
	/*
	 * 修改用户 
	 */
	function ajax_get_mods_modify_user($id){
		
		    $modules= DB::query(Database::SELECT,"
		              SELECT * FROM admin_user WHERE user_id=:id
	                  ",TRUE)->param(':id',$id);
		    $modules=$modules->as_object()->execute();
		    $tt= $modules->as_array();
		    $active =($tt[0]->is_active)?'selected':''; 		    
			$result ='<div class="roles">';
			$result .='<div class="contextual"></div>';
			$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
			$result .='</i><span>用户管理 -- 修改</span></h3>';
            $result .='<div id="status"></div>';
			$result .='<table class="list">
		               <thead>
		                 <th colspan=2>-- 用户信息</th>
		               </thead>';
			$result .='<tbody>';
			$result .=' <tr><td style="text-align:right;width:70px">用户名称：</td><td><input name="username" id="username" value="'.$tt[0]->username.'" /></td></tr>
			            <tr><td style="text-align:right" >Email：</td><td><input name="email" id="email" value="'.$tt[0]->email.'" /></td></tr>
			            <tr><td style="text-align:right">密码：</td><td><input name="psw" id="psw" value="" /></td></tr>
			            <tr><td>激活状态：</td><td>
			                <select name="active" id="active" > ';
			if ($active=='selected'){
			$result .= '
			            <option value="1" selected>激活</option>
			            <option value="0">锁定</option>';
			}         
			else
			{
			 $result .= '
			            <option value="1">激活</option>
			            <option value="0" selected>锁定</option>';
			}       
			
			$result .='</select>
			           </td></tr>
		               <tr><table class="list rolelist" >
			            <thead>
			              <tr><th colspan=2>-- 用户角色</th>
                          </tr>
			              <tr>
                          <th>指定</th>
                          <th>角色名称</th></tr>
                        </thead>
                       <tbody>          
			           ';
			 
            $modules= DB::query(Database::SELECT,"
		              SELECT * 
		              FROM admin_role
		              WHERE parent_id=0     
	                  ",TRUE);
		    $modules=$modules->as_object()->execute();
		    $i=0; 
	        foreach($modules as $key=>$value)
	        {
	           $mod = ($i%2)?'odd':'even';
	           $rs = DB::query(Database::SELECT,"
		              SELECT * 
		              FROM admin_role
		              WHERE parent_id=:id and user_id=:uid     
	                  ",TRUE)
                      ->param(':id',$value->role_id)  
                      ->param(':uid',$id)  
   	                  ->as_object()
	                  ->execute();
	           $rs= $rs->as_array();
	         
	           $checked = (count($rs)>0)?'checked':''; 
		       $result .= '<tr>
		                    <td class="'.$mod.'"  style="width:70px"><input type="radio" name="roles" value="'.$value->role_id.'" '.$checked.' /> </td>
		                    <td class="'.$mod.'">'.$value->role_name.'</td>
		                   </tr>';
		       $i=$i+1;
		    }
	        
			$result .='</tbody>';
			$result .='</table></div>';
			

		 $result .=' <div style="padding-top:20px;" class="dialog_buttons ">
                     <label class="uiButton" >
    	               <input type="button" name="del" onclick="Sys.delUser('.$tt[0]->user_id.');" value="删除">
    	             </label>
    	            
		             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sys.modifyUser('.$tt[0]->user_id.');" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="">
    	             </label>
    	            </div>';
		return $result;
	}
	
	
    /*
	 * 得到用户列表 
	 */
	function ajax_get_mods_user_list(){

		$modules= DB::query(Database::SELECT,"
		              SELECT * FROM admin_user 
	                  ",TRUE);
		//echo Kohana::debug((string) $modules);
		$modules=$modules->as_object()
		->execute();
		$tt= $modules->as_array();
		
		if (count($tt[0])>0)
		{
			$result ='<div class="roles">';
			$result .='<div class="contextual"><a href="/home?sk=sysusernew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新增用户</span></a></div>';
			$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
			$result .='</i><span>用户列表</span></h3>';
           
			$result .='<table class="list">
		               <thead>
		                  <th>序号</th><th>用户名</th><th>电子邮件</th><th>状态</th>
		               </thead>';
			$result .='<tbody>';
			$i=1;
            
			foreach($modules as $key => $value){

				$mod = ($i%2)?'odd':'even';
				$active = ($value->is_active)?'激活':'锁定';
				$result.= '<tr id="row_'.$value->user_id.'" class="" >';
				$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
				$result.= '<td  class="'.$mod.'"><span><a href="/home?sk=sysusermodify&fl='.$value->user_id.'">'.$value->username.'</a></span></td>';
				$result.= '<td  class="'.$mod.'"><span>'.$value->email.'</span></td>';
				$result.= '<td style="width:30px;" class="'.$mod.'"><span>'.$active.'</span></td>';
				$result.= '</tr>';
				$i++;
			}

			$result .='</tbody>';
			$result .='</table></div>';

		}
		else{
		 $result ='<div class="roles">';
		 // $result .='<div class="contextual"><a href="/home?sk=custmtcart&fl='.$meetid.'"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
		 $result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		 $result .='</i><span>用户列表</span></h3>';
		 $result .= '<div style="width:100%;text-align:center;font-size:16px;">暂时没有内容</div> </div>';

		}

		return $result;
	}

	/*
	 * 得到角色列表 
	 */
	function ajax_get_mods_role_list(){

		$modules= DB::query(Database::SELECT,"
		              SELECT * FROM admin_role 
		              where  parent_id=0                
                      ",TRUE);
		//echo Kohana::debug((string) $modules);
		$modules=$modules->as_object()
		->execute();
		$tt= $modules->as_array();
		
		


		if (count($tt[0])>0)
		{
			$result ='<div class="roles">';
			$result .='<div class="contextual"><a href="/home?sk=sysrolenew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新增角色</span></a></div>';
			$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
			$result .='</i><span>角色列表</span></h3>';
           
			$result .='<table class="list">
		               <thead>
		                
		                  <th>序号</th><th>角色名称</th>
		               </thead>';
			$result .='<tbody>';
			$i=1;
             
			foreach($modules as $key => $value){
				$mod = ($i%2)?'odd':'even';
				$result.= '<tr id="row'.$value->role_id.'" class="" >';
				$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
				$result.= '<td  class="'.$mod.'"><span><a href="/home?sk=sysroleview&fl='.$value->role_id.'">'.$value->role_name.'</a></span></td>';
				$result.= '</tr>';
				$i++;
			}

			$result .='</tbody>';
			$result .='</table></div>';

		}
		else{
		 $result ='<div class="roles">';
		 // $result .='<div class="contextual"><a href="/home?sk=custmtcart&fl='.$meetid.'"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
		 $result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		 $result .='</i><span>角色列表</span></h3>';
		 $result .= '<div style="width:100%;text-align:center;font-size:16px;">暂时没有内容</div> </div>';

		}

		return $result;
	}
	
	function ajax_get_mods_role_view_list($id){
		

		$results= DB::query(Database::SELECT,"
		              SELECT * FROM admin_role,admin_rule 
		              WHERE admin_role.role_id= admin_rule.role_id and admin_role.role_id=:id                   
                      ",TRUE)
		           ->param(':id',$id);
		//echo Kohana::debug((string) $results);
		$results=$results->as_object()
		->execute();
		
		$tt= $results->as_array();
		
		
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=sysrolenew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新增角色</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>角色列表-- 修改</span></h3>';
		
		
	   if (count($tt)>0)
		{
			
	         $result .='
	  
		        <div id="status"></div>
		    
	         <table class="list">
		      <thead>
		        <tr>
		         <th colspan=2 >--- 角色信息</th>
		        <tr> 
		        <td style="width:60px;">角色名称:</td><td>
		           <input type="hidden" class="rid" id="rid" name="rid" value="'.$tt[0]->role_id.'" >'.$tt[0]->role_name .'</td></tr>
		       <tr>
			      <th colspan=2 >--- 角色资源</th>
			    </tr>
                </thead>
		        <tbody >
			    <tr><td>角色资源:</td><td><select id="all"  name="all" onchange="Sys.showRes(this)" > ';
                 if ($tt[0]->resource_id === 'all')
                 {
		          $result .='  <option value="all" selected >所有</option>
		                       <option value="custom">定制</option> ';
                 }
		         else{
		            $result .=' <option value="all"  >所有</option>
		                        <option value="custom" selected>定制</option>';
		          }
		        $result .=' </select></td></tr>
		      
		       
		        ';
			    
           	    $modules =kohana::config('settings')->modules;
           	    
           	    $display= ($tt[0]->resource_id === 'all') ? 'none': ''; 
           	    
                $result.= '<tr class="roletree" style="display:'.$display.'" ><td style="width:60px;"></td>';
			    $result.= '<td><ul class="tree clearfix" style="clear:both; margin-left:15px;">';
                    
			    foreach($modules as $key => $value){
			    	 $k= $value['sk']; 
			         $result.='<li>
			                     <input type="checkbox" id="'.$value['sk'].'" value="'.$value['sk'].'"  />
			                     <label>'.$value['name'].'</label> ';
			                 
			         $result.='<ul>';
                     foreach($value['ct'] as $subkey =>$subvalue){
                       $k1 = $k.'/'.$subvalue['name'];
				       $result.= '<li>
				                    <input type="checkbox" value= "'.$k1.'" />				                    
				                    <label>'.$subkey.'</label>
				                  ';
                        $result.='<ul>';
				        foreach($subvalue['permissons'] as $psubkey =>$psubvalue){
				          $k2 = $k1.'/'.$psubkey; 	 
				          $result.= '<li>
				                        <input type="checkbox" id="rolecheck" name="'.$k2.'" value="'.$k2.'" />
				                        <label>'.$psubvalue.'</label>
				                     </li>';
				        }
				        $result.='</ul>
				        </li>';
				     }
                     $result.= '</ul></li>';
			    }
			    

			$result .='</ul></td></tr>
			
			 <tr>
			   <th colspan=2 >--- 角色用户</th>
			 </tr>
			 <tr>
			   <table  class="list userlist" >
			     <thead>
                   <th  style="width:50px;text-align:center;"><input type="checkbox" id="userlist" name="userlist" /></th>
                   <th>用户编号</th>
                   <th>用户名</th>
                   <th>状态</th>
                 </thead>
                 <tbody>
                 ';
             $resultdb= DB::query(Database::SELECT,"SELECT * 
                                  FROM admin_user",TRUE)
                        ->as_object()->execute();
             $rs= $resultdb->as_array();
   
             if (count($rs)>0)
             {
                foreach($rs as $key => $value){
                  $active = ($value->is_active)?'激活':'锁定';  
                  
                  $rs= DB::query(Database::SELECT,"SELECT * 
                         FROM admin_role where parent_id=:id and user_id=:uid",TRUE)
                        ->param(':id',$tt[0]->role_id)
                        ->param(':uid',$value->user_id)
                        ->as_object()->execute();
                        
                  $checked ='';
                  $t = $rs->as_array();
                  if (count($t)>0)
                  $checked = 'checked';
                         
                  $result .= '<tr><td style="width:50px;text-align:center;"><input '.$checked.' type="checkbox" id="u_'.$value->user_id.'" name="u_'.$value->user_id.'" value="'.$value->user_id.','.$value->username.'" /></td>'; 	
                  $result .= '<td style="width:20px;">'.$value->user_id.'</td>'; 
                  $result .= '<td>'.$value->username.'</td>'; 
                  $result .= '<td style="width:20px;">'.$active.'</td></tr>'; 
                } 	
             }    
             else
             $result .='<td colspan=4 style="text-align:center" >没有数据</td>';
             $result .='</tr>
                 </tbody>
                 
               </table>
			 </tr> 
			
			</tbody>';
		 
		 $result .='</table></div>
		 <script>
		   $(".list ul.tree").checkTree({
		     
		   });
		   
		   Sys.getTree();
		   
		 </script>
		 ';
		 
	   }
		else{
		 $result .= '<div style="width:100%;text-align:center;font-size:16px;">暂时没有内容</div> </div>';

		}
		
	   $result .=' <div style="padding-top:20px;" class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sys.delRole('.$id.');" value="删除">
    	             </label>
	                 <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sys.objClick();" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="Custs.closedialog()">
    	             </label>
    	            </div>';

		return $result;
	}



}
