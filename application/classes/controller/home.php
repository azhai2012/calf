<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {


	private  $template='';
	private $model;
	private $userid;
	private $roleid;
	private $isadmin=0;
	private $username='';

	public function before(){
		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
		$memche = Kohana::config('settings')->memcache;
		
		$memcached = $memche['memcached'];
		$this->sessionname = $memche['sessionname'];
		$this->links= $memche['links'];
		
		if (!$memcached)
		{ 
			$this->session = Session::instance();
		}
		else
		{
          if (isset($_SERVER['HTTP_COOKIE']))
            $a = explode('session=',$_SERVER['HTTP_COOKIE']);
          else
            $this->request->redirect($this->links);
		
		   if (isset($a[1]))  
		     $id= substr($a[1],0,26);
		  else
		     $this->request->redirect($this->links);
		
          $memcache_obj = new memcache;
          $memcache_obj->connect($memche['tcpip'],$memche['ports']);
          $m_obj = $memcache_obj->get("$id");
          $m = explode($this->sessionname.'|',$m_obj);
          if (!is_array($m) or empty($m[1]))
             $this->request->redirect($this->links);   
          else
          $this->session = array($this->sessionname=>unserialize($m[1])); 
		}
		
		$sess= $this->session[$this->sessionname][0];
		
		if (is_array($this->session))
		  $islogin= $sess->userid;
		else
		  $islogin=''; 
		  
		if (empty($islogin) || $islogin==='')
		{
			$this->request->redirect($this->links);
	    }
		
	    $this->userid  = $sess->userid;
	   // $this->username  = $sess->username;
	    
		$this->roleid  = $sess->role_id;
		$this->isadmin = $sess->isadmin;
	}
	
	public function action_index()
	{	
		parent::before();
		$sk = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$fl = array_key_exists('fl',$_GET)?$_GET['fl']:'';
		
		$date = explode(',',$fl); 
		 
		$bdate = (!empty($date[0]))?$date[0]:date('Y-m-d');
		$edate = (!empty($date[1]))?$date[1]:date('Y-m-d');
		
		
	    $u = new Calf_Menus();
		$result = Calfpub::getmenus($u);
		$head=''; 
	    foreach ($result as $key => $value){
	    	$head.= $key.":".$value->name;
	    } 
	    
	     $this->template->info= array('id'=>$this->userid);
	    $this->template->contentcol='';
	    $this->template->head=$head;
	    $this->template->css='';
		if ($this->isadmin===1)
	    $this->template->rfloat=array(array('name'=>'管理','url'=>'/?sk=admin'),array('name'=>'首页','url'=>'/'));
	    else 
	    $this->template->rfloat=array(array('name'=>'首页','url'=>'/'));
	  	if (substr($sk,0,2)==='ad' && $this->isadmin==1)
		{
		   $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_admin_menus().'\'});</script>';
				
	       switch ($sk){
			  case 'adr':{
		       $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adr","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  case 'adrnew':{
		 	  	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adrnew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  case 'adredit':{
			  	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adrview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  
			  case 'adu':{
		       $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adu","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  case 'adunew':{
			   $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adunew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  case 'aduedit':{
			   $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=aduview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			  }break;
			  
			}
			
			
		}
	 	else
	 	{
	 		
	 		$this->template->css='';
	 			$this->template->contentcol='';
	 			$this->template->menus='';
	 			
	 		switch ($sk){
	 			
	 			//会展设置
	    		case 'meet':{
                    $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,strlen($sk)).'\'});</script>';
	    			$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meet&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;
			    
	    	    case 'meetnew':{
	    	    	$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetnew&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;		  
      
			    case 'meetedit':{
   	                $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetview&fl='.$fl.'&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;
			    
			  
                //客户管理
			    case 'custmt':{
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmeetjoin&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			      	
			    }break;		
			    
                 case 'custmtprodview':{
                    $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtprodview&fl='.$fl.'&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>';
	    	    
                 }break;
                  
			    case 'custmtview':{
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtview&fl='.$fl.'&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	
	    	    	';
			      	
			    }break;		
			    
			    case 'custropose':{
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,10).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custropose&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	
	    	    	';
		   	
			    }break;
			    
			    case 'custorder':{
			    	$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,9).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtorder&bdate='.$bdate.'&edate='.$edate.'&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	
	    	    	';
			    }break;
			    
			    case 'custmtcart':{  //参会购物栏
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtgettmpcart&fl='.$fl.'&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	';
			    }break;			  
			    
			    
			    //供货商管理
			    case 'supm':{

			       $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
	    	       $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supmt&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                   $this->template->css ='
                             <script>Azhai.onPages({"type":"js","js":["/media/js/ajaxfileupload.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/meet.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/nicedit/nicEdit.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/sups.js?'.time().'"]});</script>';
			    
			    }break;
			    
			     case 'supmview':{

			       $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
	    	       $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supmview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                   $this->template->css ='
                             <script>Azhai.onPages({"type":"js","js":["/media/js/ajaxfileupload.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/meet.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/sups.js?'.time().'"]});</script>';
			    
			    }break;
			    
                case 'supmnew':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supnew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='
                             <script>Azhai.onPages({"type":"js","js":["/media/js/ajaxfileupload.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/meet.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/sups.js?'.time().'"]});</script>';
			     
			    }break;
			    
			     case 'suporder':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,8).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suporder&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='
                             <script>Azhai.onPages({"type":"js","js":["/media/js/ajaxfileupload.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/meet.js?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/sups.js?'.time().'"]});</script>';
			     
			    }break;
			    
			    case 'suppropose':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,10).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suppropose","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='';
			     
			    }break;
			    
			    case 'supkc':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,5).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supkc","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='';
			    	
			    }break;
			    
	 		   case 'suprk':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,5).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suprk","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='';
			    	
			    }break;
			    
			    case 'suptk':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,5).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suptk","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='';
			    	
			    }break;
			    
			     case 'supxs':{
			     $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,5).'\'});</script>';
			     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supxs","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->css ='';
			    	
			    }break;
			    
			     case 'spsz':{
			     	
			      $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
			      $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=spsz","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                  $this->template->css ='';
			    	
			     }break;
			     
			     case 'ddbb':{
			      $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
			      $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=ddbb","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                  $this->template->css ='';
			     	
			     }break;
			     
                 case 'xsbb':{
			       $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
			       $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=ddbb","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                   $this->template->css ='';
			     }break;
			  
			     
			    default : {
			 
			    	$this->template->contentcol='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=build","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }
			    
			    
			    
			    
			    
	    	}
		}
		
		//$this->template->css .='<script>Azhai.onPages({"type":"css","css":["/media/css/apps.css?'.time().'"]});</script>';
	    
	    
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome