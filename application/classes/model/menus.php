<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Menus {

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
	
	private $mods='';

	function get_menus(){
		$result='';
		
		$modules= Kohana::config('settings')->moudles;
		$_get= (empty($_GET['sk']))?'sz':$_GET['sk'];
		foreach($modules as $key => $value){
			$modid = ($value['sk']==$_get)?'selectItem':'';
			$result.= '<li >';
			$result.= '<a class=\"item '.$modid.'\" href=\"/?sk='.$value['sk'].'\" >';
			$result.= '<span class=\"leftimg\"><i class=\"img calfimage menu'.$value['sk'].'\"></i></span>';
			$result.= '<span>'.$this->utf8Escape($value['name']).'</span></a>';
			$result.= '<span class=\"loadingindicator\"></span>';
			$this->mods = $key;
			if ($value['sk']==$_get){
			  $result.= '<ul>';
			  foreach ($value['ct'] as $subkey => $subvalue){
			  	$result.= '<li class=\"key-'.$subvalue.' \"><a class=\"subitem\" href=\"/home?sk='.$subvalue;
				$result.= '\"><span>'.$this->utf8Escape($subkey).'</span></a> ';
				$result.= '<span class=\"loadingindicator\"></span>';
                $result.= '</li>';				
			  }
			  $result.= '</ul>';
			}
			
			$result.= '</li>';
		}
		return $result;
	}
	
	 function getmods($m){
	 	
	 	$modules= Kohana::config('settings')->moudles;
	 	$result = '';
	 	foreach($modules as $key => $value){
	 		
	 	   foreach ($value['ct'] as $subkey => $subvalue)
	 	   {
	 	   	  if ($subvalue===$m){
	 	   	  	 $result=$key;
	 	   	  	 break;
	 	   	  }
	 	   }	
	 	}
	 	return $result;
	 }
	
     function get_sub_menus(){
		$result='';
		$modules= Kohana::config('settings')->moudles;
		$_get= (empty($_GET['sk']))?'sz':$_GET['sk'];
		
		foreach($modules as $key => $value){
			$result.= '<li >';
			$result.= '<a class=\"item \" href=\"/?sk='.$value['sk'].'\" >';
			$result.= '<span class=\"leftimg\"><i class=\"img calfimage menu'.$value['sk'].'\"></i></span>';
			$result.= '<span>'.$this->utf8Escape($value['name']).'</span></a>';
			$result.= '<span class=\"loadingindicator\"></span>';
		    $d = $this->getmods($_get);
			if ($value['sk'] === $modules[$d]['sk']){
			  $result.= '<ul>';
			  foreach ($value['ct'] as $subkey => $subvalue){
			  	$modid = ($subvalue === $_get)?'selectItem':'';
			  	$result.= '<li class=\"key-'.$subvalue.' '.$modid.'\"><a class=\"subitem\" href=\"/home?sk='.$subvalue;
				$result.= '\"><span>'.$this->utf8Escape($subkey).'</span></a> ';
				$result.= '<span class=\"loadingindicator\"></span>';
                $result.= '</li>';	
              }
					
			  $result.= '</ul>';
			}
		   $result.= '</li>';
		}
		return $result;
	}
	
	function get_admin_menus(){
	    $result='';
		$modules= Kohana::config('settings')->admins;
		$_get= (empty($_GET['sk']))?'sz':$_GET['sk'];
		
		foreach($modules as $key => $value){
			$selectitem= ($value['sk']===$_get)?'selectItem':'';
			$result.= '<li >';
			$result.= '<a class=\"item '.$selectitem.'\" href=\"/?sk='.$value['sk'].'\" >';
			$result.= '<span class=\"leftimg\"><i class=\"img calfimage menu'.$value['sk'].'\"></i></span>';
			$result.= '<span>'.$this->utf8Escape($value['name']).'</span></a>';
			$result.= '<span class=\"loadingindicator\"></span>';
		    $result.= '</ul>';
		  }
		   $result.= '</li>';
		
		return $result; 
	}
	
   

}
