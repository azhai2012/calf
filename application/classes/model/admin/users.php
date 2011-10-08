<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Admin_Users {

	/*
    function getutf($str){        
    	$comm= new Model_Comm();
        return $comm->utf8Escape($str);
    }
    
	 * 获取用户列表
	 */
	
	
    function ajax_set_admin_users($array,$type="DELETE"){
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
	
	function ajax_get_admin_users_list($page){
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=adunew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新建用户</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadu">';
		$result .='</i><span>用户</span></h3>';
	    $result .='<table class="list"><thead>
		<tr colspan=6>用户查询<input id="finduname" name="finduname" value="" /><input type="button" id="findbtn" name="findbtn" value="查询" onclick="Admins.Userlists('.$page.')" /></tr>
		<tr><th style="width:250px;">用户名称</th><th>邮件地址</th><th>角色分配</th><th>创建于</th><th>最后登录</th><th></th></tr></thead>
		<tbody></tbody>';
		$result .='</table>';
		return $result;
	}
	
	function ajax_get_admin_users_list_page($page){
		
		$modules= DB::query(Database::SELECT,"select count(1) as ct 
		                              from users inner join 
		                                   roles on users.role_id=roles.id ",TRUE);
		//echo kohana::debug((string)$modules); 
		 $modules=$modules->as_object()
		          ->execute();
		$modules = $modules-> as_array();          
		$totalcount = $modules[0]->ct;
		
		$per_page=15;
        //$page_num = array_key_exists('page',$_GET)? $_GET['page']:1;
        $page_num = (!empty($page))?$page:1;

        $offset = ($page_num - 1) * $per_page;

        $pages =  Pagination::factory(array
                (
                'style' => 'floating',
                'items_per_page' => $per_page,
                'custom' => '/',
                'view' =>'pagination/cusfloating',
                'query_string' => 'page',
                'total_items' => $totalcount,
                'ajaxfunc'=>'Admins.Userlists',
                ))->render();
          
        
		$modules= DB::query(Database::SELECT,"select users.*,roles.name 
		          from users inner join roles on users.role_id=roles.id 
		          limit :offset,:page
		          ",TRUE)
		          ->param(':page',$per_page)
		          ->param(':offset',$offset);
		 
		 //echo kohana::debug((string)$modules);          
		          
		 $modules= $modules->as_object()->execute();

		$result ='';
		$i=0;
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td class="'.$mod.'"><span><a href="/home?sk=aduedit&fl='.$value->id.'">'.$value->username.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->email.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->name.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->create_login_on.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->last_login_on.'</span></td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons" >
			              <a href="javascript:LockUserName('.$value->id.');">
			                <span style="top:4px;"  class="leftimg">
			                 
			                  </span>
			                  <span>锁定</span>
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
		$result.='<tr><td colspan=6><div class="clearfix">'.$pages.'</div></td></tr>';
		return $result;
		
	}


	function ajax_get_admin_users_new(){
		$result ='<form action="/?sk=adu"  method="post" ><div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=adu">用户</a> <span class="ss"> >></span><span class="sf"> 新建用户 </span> </span></h3>
		          
		          <div class="info"></div>
		          <div class="topbox">
		           <div><label><span>用户名称：</span><span class="required">*</span><input name="username" id="username" value="" /></label></div>
		           <div><label><span>邮箱地址：</span><span class="required">*</span><input name="email" id= "email" value="" /></label></div>
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
		    $result .=' <option value="'.$value->id.'">'.$value->name.'</option>';
        }
        $result .='</select></label></div>';
		$result.= '</fieldset>';
		$result .='<div><a href="/home?sk=adrnew">创建新角色和权限</a></div>';
		$result .='</div>';
		
	    $result .='<div class="btn">
	               <input name="commit" type="button" value="创建" onclick="AddUserName(true)"  />
	               <input name="continue" type="button" value="创建并继续" onclick="AddUserName(false)" >
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
