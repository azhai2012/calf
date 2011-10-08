<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Menus {

     

     function checklogin(){

		$memche = Kohana::config('settings')->memcache;

		$memcached = $memche['memcached'];
		$sessionname = $memche['sessionname'];
		$links= $memche['links'];
        
		if (!$memcached)
		{
			$session = Session::instance();
			$tt= $session->get($sessionname);

			if (isset($tt[0]))
			{
				$sess = array('islogin'=>TRUE,'links'=>$links,'result'=>$tt[0]);
			}
			else
			{
				$sess = array('islogin'=>FALSE,'links'=>$links,'result'=>array()); 
			}
			 
		}
		else
		{
			if (isset($_SERVER['HTTP_COOKIE']))
			  $a = explode('session=',$_SERVER['HTTP_COOKIE']);
			else
			  $sess = array('islogin'=>FALSE,'links'=>$links,'result'=>array()); 

			if (isset($a[1]))
			  $id= substr($a[1],0,26);
			else
			  $sess = array('islogin'=>FALSE,'links'=>$links,'result'=>array());  

			$memcache_obj = new memcache;
			$memcache_obj->connect($memche['tcpip'],$memche['ports']);
			$m_obj = $memcache_obj->get("$id");
			$m = explode($this->sessionname.'|',$m_obj);
			
			if (!is_array($m) or empty($m[1]))
			  $sess = array('islogin'=>FALSE,'links'=>$links,'result'=>array()); 
			else
			{
			  $this->session = array($sessionname => unserialize($m[1]));
			  $sess= array('islogin'=>FALSE,'links'=>$links,'result'=>$this->session[$sessionname][0]);
			}
		}
		
		return $sess;
		
     }
		
	
	
	function getUtf8($_str){
		$modcomm=new Model_Comm();
		return $modcomm->utf8Escape($_str);
	}

    function getParentMods($id){
	   	
		$modules= Kohana::config('settings')->modules;
		/*$modulesdb= DB::query(Database::SELECT,"select users.*,enabled_modules.name
		          from users inner join 
		               enabled_modules on users.role_id=enabled_modules.role_id
		          where users.userid=:id     
                  ",TRUE)
		->param(':id',$id);
        */

		$modulesdb= DB::query(Database::SELECT,"select *
		          FROM admin_role
                  INNER JOIN admin_rule ON admin_role.parent_id = admin_rule.role_id
		          where admin_role.user_id=:id     
                  ",TRUE)
		          ->param(':id',$id);
        
		
		//echo Kohana::debug((string) $modulesdb);

		$modulesdb = $modulesdb->as_object()->execute();
      
		$result = array();
		$result1 = array();
		$result2 = array();
		$result3 = array();
		$result4 = array();
		foreach($modulesdb as $dbkey => $dbvalue){
		  
		  if ($dbvalue-> resource_id === 'all')
		  {
		    foreach ($modules as $key=>$value){
		    	
				foreach ($value['ct'] as $subkey => $subvalue)
				{
						$result1[] .= $value['sk'];
						$result3[] .= $value['name'];
						$result2[] .= $subvalue['name'];
				}
			}
		  	
		  }	
		  else
		  if ($dbvalue->permission === 'allow')
		  {	
			
			foreach ($modules as $key=>$value){

				foreach ($value['ct'] as $subkey => $subvalue)
				{
					if (($subvalue['name'] === $dbvalue->resource_id)
					    or ($value['sk'].'/'.$subvalue['name'] === $dbvalue->resource_id)){
						$result1[] .= $value['sk'];
						$result3[] .= $value['name'];
						$result2[] .= $subvalue['name'];
						continue;
					}
				}
			}
		  }
		
			
		}
		$result4 = array_combine($result3,$result1);
		$result= array(array_unique($result4),$result2);
		return $result;
	}

	function get_id_menus($id){
		$result='';

		$pmods = $this->getParentMods($id);

		$_get= (empty($_GET['sk']))?'nt':$_GET['sk'];
		$modules= Kohana::config('settings')->modules;
		$nt=($_get=='nt')?'selectItem':'';
		$result.= '<li><a class=\"item '.$nt.'\" href=\"/admin?sk=nt\"><span class=\"leftimg\"><i class=\"img calfimage menunt \"></i></span><span>最新公告信息</span></a> </li>';	
		foreach($pmods[0] as $key => $value){

			$modid = ($value == $_get)?'selectItem':'';
			$result.= '<li >';
			$result.= '<a class=\"item '.$modid.'\" href=\"/admin?sk='.$value.'\" >';
			$result.= '<span class=\"leftimg\"><i class=\"img calfimage menu'.$value.'\"></i></span>';
			$result.= '<span>'.$this->getUtf8($key).'</span></a>';
			$result.= '<span class=\"loadingIndicator\"></span>';

			if ($value==$_get){
				$result.= '<ul>';
			
				
			    foreach ($modules as $modkey => $modvalue){
					if ($key===$modvalue['name'])
					{
						foreach ($modvalue['ct'] as $subkey => $subvalue){
							foreach($pmods[1] as $pkey => $pvalue){
								if ($pvalue ===$subvalue['name'])
								{
									$result.= '<li class=\"key-'.$subvalue['name'].' \"><a class=\"subitem\" href=\"/home?sk='.$subvalue['name'];
									$result.= '\"><span>'.$this->getUtf8($subkey).'</span></a> ';
									$result.= '<span class=\"loadingIndicator\"></span>';
									$result.= '</li>';
								}
							}
						}
					}
				}
				$result.=' <div class="uiHeaderTopBorder"><div class="clearfix uiHeaderTop"></div></div>';
				$result.= '</ul>';
			}

			$result.= '</li>';
		}
		$result.=' <div class="uiHeaderTopBorder"><div class="clearfix uiHeaderTop"></div></div>';
		return $result;
	}



	function getmods($m){
			
		$modules= Kohana::config('settings')->modules;
		$result = '';
		foreach($modules as $key => $value){

			foreach ($value['ct'] as $subkey => $subvalue)
			{
		
				if ($subvalue['name']===$m){
					$result=$value['sk'];
					break;
				}
			}
		}
		return $result;
	}

	 function get_id_sub_menus($id,$i = 4){
		$result='';
		$modules= Kohana::config('settings')->modules;
		$pmods = $this->getParentMods($id);
	
		$_get= (empty($_GET['sk']))?'nt':$_GET['sk'];
		
		$nt=($_get=='nt')?'selectItem':'';
		$result.= '<li><a class=\"item '.$nt.'\" href=\"/?sk=nt\"><span class=\"leftimg\"><i class=\"img calfimage menunt \"></i></span><span>最新公告信息</span></a> </li>';	
		

		foreach($pmods[0] as $key => $value){
			$result.= '<li >';
			$result.= '<a class=\"item \" href=\"/admin?sk='.$value.'\" >';
			$result.= '<span class=\"leftimg\"><i class=\"img calfimage menu'.$value.'\"></i></span>';
			$result.= '<span>'.$this->getUtf8($key).'</span></a>';
			$result.= '<span class=\"loadingIndicator\"></span>';
			$_get = substr($_get,0,$i);
			$modid = $this->getmods($_get);
		
			if ($value===$modid) {
	    	$result.= '<ul>';
			foreach ($modules as $modkey => $modvalue){
				if ($modvalue['sk'] === $modid)
				{
					foreach ($modvalue['ct'] as $subkey => $subvalue){
						foreach($pmods[1] as $pkey => $pvalue){
							
							if ($pvalue ===$subvalue['name'])
							{
								$modid = ($subvalue['name'] === $_get)?'selectItem loading':'';
								$result.= '<li class=\"key-'.$subvalue['name'].' '.$modid.' \"><a class=\"subitem\" href=\"/home?sk='.$subvalue['name'];
								$result.= '\"><span>'.$this->getUtf8($subkey).'</span></a> ';
								$result.= '<span class=\"loadingIndicator\"></span>';
								$result.= '</li>';
							}
						}
					}
				}
			}
			$result.=' <div class=\"uiHeaderTopBorder\"><div class=\"clearfix uiHeaderTop\"></div></div>';

			$result.= '</ul>';
		  }
		}
		$result.=' <div class=\"uiHeaderTopBorder\"><div class=\"clearfix uiHeaderTop\"></div></div>';
		return $result;
	}
	
	function get_admin_menus(){
		$result='';
		$modules= Kohana::config('settings')->admins;
		$_get= (empty($_GET['sk']))?'sz':$_GET['sk'];

		foreach($modules as $key => $value){
			$selectitem= ($value['sk']===substr($_get,0,3))?'selectItem loading':'';
			$result.= '<li class=\"item '.$selectitem.'\">';
			$result.= '<a  href=\"/admin?sk='.$value['sk'].'\" >';
			$result.= '<span class=\"leftimg\"><i class=\"img calfimage menu'.$value['sk'].'\"></i></span>';
			$result.= '<span>'.$this->getUtf8($value['name']).'</span></a>';
			$result.= '<span class=\"loadingIndicator\"></span>';
			$result.= '</li>';
		}


		return $result;
	}



}
