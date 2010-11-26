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

	/*
	 * 获取角色和权限列表
	 */
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
			$result.= '<tr id="row'.$value->id.'" class="" ><td class="'.$mod.'"><span><a href="/home?sk=adredit&fl='.$value->id.'">'.$value->name.'</span></td>';
			$result.= '<td class="'.$mod.'">'.$value->description.'</td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons"><a href="javascript:deleterolename('.$value->id.');"><span class="leftimg"><span class="selectdel"></span><i class="img calfimage icon-del"></i></span><span>删除</span></a></td>';
			$result.= '</tr>';
			$i++;
		}
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}

	function ajax_set_admin_roles($array,$type="DELETE"){
		$result='';
		$array = explode(';',$array);
		switch ($type)
		{
			case "DELETE":{
				
				$id = $array[0];
				
				$result= DB::query(Database::DELETE,"DELETE FROM roles WHERE id=:id",TRUE)
				         ->param(':id',$id)
				         ->as_object()
				         ->execute();
				         
				$result= DB::query(Database::DELETE,"DELETE FROM enabled_modules WHERE id=:id",TRUE)
				         ->param(':id',$id)
				         ->as_object()
				         ->execute();    
				              
			}break;
			
			case "INSERT":{
				
				$name=$array[1];
				$desc=$array[2];
				$perm=$array[3];
				$mods=$array[4];
				
				$result= DB::query(Database::INSERT,"INSERT INTO roles (name,description,permissions) 
				                             VALUES (:name,:description,:permissions)",TRUE)
				         ->param(':name',$name)
				         ->param(':description',$desc)
				         ->param(':permissions',$perm)
				         ->as_object()
				         ->execute();
				         
	            $query=  DB::query(Database::SELECT,"SELECT max(id) as ID FROM roles ",TRUE)
				         ->as_object()
				         ->execute();
				         
				foreach ($query as $row){
				   $id= $row->ID;	
				};         

				$mod_results =explode('|',$mods);
				$_insert_mod_query = "INSERT INTO enabled_modules (role_id,name) value ";
				foreach ($mod_results as $row){
				  $_insert_mod_query .= '('.$id.',"'.$row.'"),';	
				}
				
				$_insert_mod_query = substr($_insert_mod_query,0,-1);
				$result= DB::query(Database::INSERT,$_insert_mod_query,TRUE)
				         ->as_object()
				         ->execute();
		
			}break;
			
			case "UPDATE":{
				
				$id   = $array[0];
				$name = $array[1];
				$desc = $array[2];
				$perm = $array[3];
				$mods = $array[4];
				
				$result= DB::query(Database::UPDATE,"UPDATE roles SET name=:name,description=:description,permissions=:permissions WHERE id=:id",TRUE)
				         ->param(':name',$name)
				         ->param(':description',$desc)
				         ->param(':permissions',$perm)
				         ->param(':id',$id);
				         
				         
			  // echo Kohana::debug((string) $result);
			   $result = $result->as_object()->execute(); 
			   
			   $result = DB::query(Database::DELETE,"DELETE FROM enabled_modules WHERE role_id=:id",TRUE)
				         ->param(':id',$id)
				         ->execute();
				         
			   $mod_results =explode('|',$mods);
			   $_insert_mod_query = "INSERT INTO enabled_modules (role_id,name) value ";
			   
			   foreach ($mod_results as $row){
				  $_insert_mod_query .= '('.$id.',"'.$row.'"),';	
			   }
				
			   $_insert_mod_query = substr($_insert_mod_query,0,-1);
			   
			   $result= DB::query(Database::INSERT,$_insert_mod_query,TRUE)
				         ->as_object()
				         ->execute();
			   
			   	         
			}break;
			
		}
		return json_encode($result);
	}



	function ajax_get_admin_roles_new(){
		$result ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=adr">角色和权限</a> <span class="ss"> >></span><span class="sf"> 新建角色 </span> </span></h3>';
		$modules= Kohana::config('settings')->modules;
        $result .='<div class="info"></div>';
		$result .='<div class="topbox">';
        $result .='<div class="rolename" ><label><span>角色名称：</span><span class="required">*</span><input name="rolename" id="rolename" /></label></div>';
		$result .='<div><label><span>角色说明：</span><span class="required">&nbsp;&nbsp;</span><input style="width:350px" name="description" id= "description" values="" /></label>';
		$result .='</div>';
		$result .='</div>';
		$result .='<h4>权限<span class="required">*</span></h4>';
		$result .='<div class="box" id="permissions">';
		foreach($modules as $key => $value){
			$result.= '<fieldset><legend>'.$value['name'].'</legend>';
			$result.= '<table class="boxitem">';
			foreach ($value['ct'] as $subkey => $subvalue){
				$result.= '<tr>';
				$p = $subvalue['permissons'];
				$result.='<td style="width:300px"><label class="floating"><input class="modparent" type="checkbox" id="'.$subvalue['name'].'" name="'.$subvalue['name'].'" value="'.$subvalue['name'].'" />'.$subkey.'</label></td>';
                $result.='<td><ul>';
				foreach($p as $tbkey => $tbvalue){                	
                 	$result.=' <li><label class="floating"><input type="checkbox" id="'.$subvalue['name'].'['.$tbkey.']" mame="'.$subvalue['name'].'['.$tbkey.']" value="'.$tbkey.'_'.$subvalue['name'].'" />'.$tbvalue.'</label></li>';
			     }
			     $result.='</ul></td>'; 
				$result.=' </tr>';
			}
			$result.='</table>';
			$result.= '</fieldset>';
		}

		$result .='<a href="javascript:checkAll(true);">全选</a>|' ;
		$result .='<a href="javascript:checkAll(false);">清除</a></div>';
		$result .='<div class="btn"><input name="commit" type="button" value="创建" onclick="javascript:Addrolename();" /><span class=""></span></div>';
		$result .='</div>';
		return $result;
	}
	
	
     function ajax_get_admin_roles_view($id){

		$result  ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=adr">角色和权限</a> <span class="ss"> >></span> <span class="sf">修改角色</span> </span></h3>';
		
		$modules= Kohana::config('settings')->modules;
		
		$dbresult = DB::query(Database::SELECT,"SELECT * FROM roles WHERE ID=:id",TRUE)
				         ->param(':id',$id)
				         ->as_object()
				         ->execute();
				         
	    foreach($dbresult as $key => $value){	
	   		$name = $value->name;        
	   		$desc = $value->description; 
	   		$perim = $value->permissions;
	    }		         

	    $moddbresult = DB::query(Database::SELECT,"SELECT * FROM enabled_modules WHERE role_id=:id",TRUE)
				         ->param(':id',$id)
				         ->as_object()
				         ->execute();		         
        
	    
	    $result .='<div class="info"></div>';
	    $result .='<div class="topbox">';
		$result .='<div class="rolename" ><div><input type="hidden" id="id" name="id" value="'.$id.'" /><label><span>角色名称：</span><span class="required">*</span><input name="rolename" id="rolename" value="'.$name.'" /></label></div>';
		$result .='<div><label><span>角色说明：</span><span class="required">&nbsp;&nbsp;</span><input style="width:350px" name="description" id= "description" value="'.$desc.'" /></label></div>';
		$result .='</div>';
	    $result .='</div>';
		$result .='<h4>权限</h4>';
		$result .='<div class="box" id="permissions">';
		$perimarrays =  explode('|',$perim);

		foreach($modules as $key => $value){
			$result.= '<fieldset><legend>'.$value['name'].'</legend>';
			$result.= '<table class="boxitem">';
			
			foreach ($value['ct'] as $subkey => $subvalue){
				$result.= '<tr>';
				$p = $subvalue['permissons'];
			    $ischecked='';
			    
                foreach ($moddbresult as $modkey => $modrows){
					if ($modrows->name == $subvalue['name'])
					{
							$ischecked="checked";
							break;
					} 
				}              	
            	  $result.='<td style="width:300px"><label class="floating"><input '.$ischecked.' class="modparent" type="checkbox" id="'.$subvalue['name'].'" name="'.$subvalue['name'].'" value="'.$subvalue['name'].'" onclick="checkHideRole(this)" />'.$subkey.'</label></td>';
                if ($ischecked === '')
	              $result.='<td class="'.$subvalue['name'].'-ul hidesubrole"><ul>';
	            else 
	              $result.='<td class="'.$subvalue['name'].'-ul"><ul>';
				foreach($p as $tbkey => $tbvalue){   
					$ischecked='';
					foreach ($perimarrays as $pkey => $pvalue){
						$ptmp= $tbkey.'_'.$subvalue['name'];
						if ($pvalue=== $ptmp) 
						{
							$ischecked='checked';
							break;
						}
					}             	
                 	$result.=' <li><label class="floating"><input '.$ischecked.' type="checkbox" id="'.$subvalue['name'].'['.$tbkey.']" mame="'.$subvalue['name'].'['.$tbkey.']" value="'.$tbkey.'_'.$subvalue['name'].'" />'.$tbvalue.'</label></li>';
			     }
			     $result.='</ul></td>'; 
			     $result.='</ul></td>'; 
				$result.=' </tr>';
			}
			$result.='</table>';
			$result.= '</fieldset>';
		}

		$result .='<a href="javascript:checkAll(true);">全选</a>|' ;
		$result .='<a href="javascript:checkAll(false);">清除</a></div>';
		$id="";
		$result .='<div class="btn"><input name="commit" type="button" value="更新" onclick="javascript:EditRoleName();" /><span class=""></span></div>';
		$result .='</div>';
		return $result;
	}


	 

}
