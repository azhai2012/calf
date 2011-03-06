<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
        public function before(){
		$this->template= View::factory('test');

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
	
function getUtf8($_str){
		$modcomm=new Model_Comm();
		return $modcomm->utf8Escape($_str);
	}
	
function get_id_menus($id){
		$result='';

		$pmods = $this->getParentMods($id);

		$_get= (empty($_GET['sk']))?'nt':$_GET['sk'];
		$modules= Kohana::config('settings')->modules;
		$nt=($_get=='nt')?'selectItem':'';
		$result.= '<li><a class=\"item '.$nt.'\" href=\"/?sk=nt\"><span class=\"leftimg\"><i class=\"img calfimage menunt \"></i></span><span>最新公告信息</span></a> </li>';	
		foreach($pmods[0] as $key => $value){

			$modid = ($value == $_get)?'selectItem':'';
			$result.= '<li >';
			$result.= '<a class=\"item '.$modid.'\" href=\"/?sk='.$value.'\" >';
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
	
	public function action_index()
	{	
		parent::before();
		
		$tmp = $this->get_id_menus(2);
		print_r($tmp);
		
		$this->template->test='';
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome