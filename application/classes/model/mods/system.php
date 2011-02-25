<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_System {


	function get_system($modname,$params = array()){
		 
		$mods= '';
		$param = $params['param'];
		
		switch ($modname){

			case "sys":{
				$mods = $this->ajax_get_mods_cus_main();

			}break;

			case "sysrole":{

				$mods = $this->ajax_get_mods_role_list();

			}break;
			
			case "addsysrole":{
				
				$mods = $this->ajax_Set_Model_Role($param,'UPDATE');
				
			}break;
			
			case "editsysrole":{
				$mods = $this->ajax_get_tree_json_list($params['param']['id']);
			}break;

			case "sysroleview":{
				
			    $mods = $this->ajax_get_mods_role_view_list($params['param']['fl']);

			}break;
			
			case "sysuser":{
				
                $mods = $this->ajax_get_mods_user_list();	
                			
			}break;

			case "sysrolenew":{
				$ary1 = explode(',',$param['params']);
				$ary  = array('userid'=>$users['userid'],'username'=>$users['username'],
				            'meetid'=>$ary1[0],'supid'=>$ary1[1],'prodid'=>$ary1[2]);
				$mods = $this->ajax_get_mods_cus_prod_view_list($ary);

			}break;

		}
		return $mods;
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

				$id = $array[0];
				$result= DB::query(Database::DELETE,"DELETE FROM suppliers WHERE id=:id",TRUE)
				->param(':id',$id);

				//echo Kohana::debug((string) $result);

				$result=$result->as_object()->execute();
			}break;

			case "INSERT":{
				
             	$id=$ary['fl'];
		        $f1=explode('|',$ary['res']);
                $ps = '';
                foreach ($f1 as $key=>$value){
                    $f2=explode(';',$value);
                    $ps='("'.$id.'","'.$f2[0].'","G","'.$f2[1].'"),';  	
                
				
				  $result= DB::query(Database::INSERT,substr($ps,0,-1),TRUE)
	   			   ->as_object()
				   ->execute();
                }
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
				          
				 
				  $t='';  
				  $sql = 'INSERT INTO admin_role (user_id,parent_id,role_type,role_name) values ';
				  $user = explode(';',substr($user,0,-1));
				  foreach($user as $key => $value)
				  {
				  	$value = explode(',',$value);		
				    $t .= "('".$value[0]."','".$id."','U','".$value[1]."'),";
				  }
				  
				  $sql .= $t;
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
			$result .='<div class="contextual"><a href="/home?sk=sysrolenew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新增角色</span></a></div>';
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
				$active = ($value->is_active === 1)?'激活':'锁定';
				$result.= '<tr id="row_'.$value->user_id.'" class="" >';
				$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
				$result.= '<td  class="'.$mod.'"><span><a href="/home?sk=sysuseredit&fl='.$value->user_id.'">'.$value->username.'</a></span></td>';
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
		$result .='</i><span>角色列表-- 修改角色</span></h3>';
		
		
	   if (count($tt)>0)
		{
	         $result .='<table class="list">
		      <thead>
		        <tr>
		         <th colspan=2 ><div id="status"></div></th></tr>
		        <tr> 
		       
		        <th style="width:60px;">角色名称</th><th>
		           <input type="hidden" class="rid" id="rid" name="rid" value="'.$tt[0]->role_id.'" >'.$tt[0]->role_name .'</th></tr>
		       <tr>
			      <td colspan=2 >--- 角色资源</td>
			    </tr>
               <tr><th>角色资源</th><th><select id="all"  name="all" onchange="Sys.showRes(this)" > ';
                 if ($tt[0]->resource_id === 'all')
                 {
		          $result .='  <option value="all" selected >所有</option>
		                       <option value="custom">定制</option> ';
                 }
		         else{
		            $result .=' <option value="all"  >所有</option>
		                        <option value="custom" selected>定制</option>';
		          }
		        $result .=' </select></th></tr>
		       </thead>
		        <tbody >
		       
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
			   <td colspan=2 >--- 角色用户</td>
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
                  $active = ($value->is_active===1)?'激活':'锁定';  
                  
                  $rs= DB::query(Database::SELECT,"SELECT * FROM admin_role WHERE role_type='U' and user_id=:id",TRUE)
                        ->param(':id',$value->user_id)
                        ->as_object()->execute();
                        
                  $checked ='';
                  if (count($rs->as_array())>0)
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
    	               <input type="button" name="save" onclick="Sys.objClick();" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="Custs.closedialog()">
    	             </label>
    	            </div>';

		return $result;
	}



}
