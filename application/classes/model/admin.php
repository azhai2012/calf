<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Admin {

	function utf2ucs($str){
		$n=strlen($str);
		if ($n=3){
			$highCode =ord($str[0]);
			$midCode = ord($str[1]);
			$lowCode = ord($str[2]);
			$a = 0x1F & $highCode;
			$b = 0x7F & $midCode;
			$c = 0x7F & $lowCode;
			$ucsCode =(64*$a+$b)*64+$c;
		}
		elseif ($n==2){
			$highCode = ord($str[0]);
			$lowCode = ord($str[1]);
			$a = 0x3F & $highCode;
			$b = 0x7F & $lowCode;
			$ucsCode =64*$a+$b;
		}
		elseif($n==1){
			$ucscode = ord($str);
		}
		return  dechex($ucsCode);
	}

	function utf8Escape($str){
		preg_match_all( "/[\xC0-\xE0].|[\xE0-\xF0]..|[\x01-\x7f]+/ ",$str,$r);
		$ar = $r[0];
		foreach($ar as $k=> $v)   {
			$ord=ord($v[0]);
			if($ord <=0x7F)
			$ar[$k]=rawurlencode($v);
			elseif   ($ord <0xE0)   {
				$ar[$k] ="\u".$this->utf2ucs($v);
			}
			elseif   ($ord <0xF0)   {
				$ar[$k]="\u".$this->utf2ucs($v);
			}
		}
		return join("",$ar);
	}

	function get_admin_roles(){
		$result ='<div class=\"roles\">';
		$result .='<div class="contextual"><a href=\"/home?sk=adrnew\" class=\"icon icon-add\">'.$this->utf8Escape('新建角色').'</a></div>';
		$result .='<h3>'.$this->utf8Escape('角色和权限').'</h3>';
		$modules= Kohana::config('settings')->modules;

		$result .='<div class=\"rolename\" ><span>'.$this->utf8Escape('角色名称').'：</span><span class=\"required\">*</span><input name=\"rolename\" id=\"rolename\" /></div>';
		$result .='<div class=\"box\" id=\"permissions\">';
		foreach($modules as $key => $value){
			$result.= '<fieldset><legend>'.$this->utf8Escape($value['name']).'</legend>';
			foreach ($value['ct'] as $subkey => $subvalue){
				$result.= '<label class=\"floating\"><input type=\"checkbox\" id=\"role_permissions_\" name=\"permissions[]\" value=\"'.$subvalue.'" />'.$this->utf8Escape($subkey).'</label>';
			}
			$result.= '</fieldset>';
		}

		$result .='<a href=\"javascript:checkAll(true);\">'.$this->utf8Escape('全选').'</a>|' ;
		$result .='<a href=\"javascript:checkAll(false);\">'.$this->utf8Escape('清除').'</a></div>';
		$result .='<div class=\"btn\"><input name=\"commit\" type=\"button\" value=\"'.$this->utf8Escape('保存').'\" onclick=\"javascript:void(0);\" /></div>';
		$result .='</div>';
		return $result;
	}

	function ajax_get_admin_roles_list(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=adrnew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新建角色</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span>角色和权限</span></h3>';
	  
		$modules= DB::query(Database::SELECT,"select * from roles",TRUE)->as_object()->execute();

		$result .='<table class="list"><thead><tr><th>角色名称</th><th>角色说明</th><th></th></tr></thead>';
		$result .='<tbody>';
		$i=0;
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr id="row'.$value->id.'" class="" ><td class="'.$mod.'"><span><a href="/?sk=adredit">'.$value->name.'</span></td>';
			$result.= '<td class="'.$mod.'">'.$value->description.'</td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons"><a href="javascript:deleterolename('.$value->id.');"><span class="leftimg"><span class="selectdel"></span><i class="img calfimage icon-del"></i></span><span>删除</span></a></td>';
			$result.= '</tr>';
			$i++;
		}
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}

	function ajax_set_admin_roles_list($array,$type="DELETE"){
		$result='';
		$array = explode(',',$array);
		switch ($type)
		{
			case "DELETE":{
				$id = $array[0];
				$result= DB::query(Database::DELETE,"DELETE FROM roles WHERE id=:id",TRUE)
				         ->param(':id',$id)
				         ->as_object()
				         ->execute();
			}break;
			
			case "INSERT":{
				$name=$array[1];
				$desc=$array[2];
				$perm=$array[3];
				$result= DB::query(Database::INSERT,"INSERT INTO roles (name,description,permissions) 
				                             VALUES (:name,:description,:permissions)",TRUE)
				         ->param(':name',$name)
				         ->param(':description',$desc)
				         ->param(':permissions',$perm)
				         ->as_object()
				         ->execute();
				
			}break;
			
			case "UPDATE":{
				$id   = $array[0];
				$name = $array[1];
				$desc = $array[2];
				$perm = $array[3];
				$result= DB::query(Database::UPDATE,"UPDATE roles name=:name,description=:description,permissions=:permissions WHERE id=:id",TRUE)
				         ->param(':name',$name)
				         ->param(':description',$desc)
				         ->param(':permissions',$perm)
				         ->as_object()
				         ->execute();
				
			}break;
			
		}
		return $result;
	}



	function ajax_get_admin_roles(){
		$result ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=adr">角色和权限</a> >> 新建角色</span></h3>';
		$modules= Kohana::config('settings')->modules;

		$result .='<div class="rolename" ><span>角色名称：</span><span class="required">*</span><input name="rolename" id="rolename" /></div>';
		$result .='<h4>权限</h4>';
		$result .='<div class="box" id="permissions">';
		foreach($modules as $key => $value){
			$result.= '<fieldset><legend>'.$value['name'].'</legend>';
			foreach ($value['ct'] as $subkey => $subvalue){
				$result.= '<label class="floating"><input type="checkbox" id="role_permissions_" name="permissions[]" value="'.$subvalue.'" />'.$subkey.'</label>';
			}
			$result.= '</fieldset>';
		}

		$result .='<a href="javascript:checkAll(true);">全选</a>|' ;
		$result .='<a href="javascript:checkAll(false);">清除</a></div>';
		$result .='<div class="btn"><input name="commit" type="button" value="保存" onclick="javascript:void(0);" /></div>';
		$result .='</div>';
		return $result;
	}


	 

}
