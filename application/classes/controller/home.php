<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {


	private  $template='';
	private $model;
	private $userid;
	private $roleid;
	

	public function before(){
		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
		$this->session = Session::instance();
		$sess= $this->session->get('userlogin');
		
		if (is_array($sess))
		  $islogin= array_key_exists('userid',$sess)?$sess:'';
		else
		  $islogin=''; 
		  
		if (empty($islogin) || $islogin==='')
		{
			$this->request->redirect('./login');
	    }

	    $asession =$this->session->as_array();
		
		$asession =$this->session->as_array();
		
		$this->userid= $asession['userlogin']['userid'];
		$this->roleid= $asession['userlogin']['roleid'];
		
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
	    $this->template->contentcol='';
	    $this->template->head=$head;
	    $this->template->css='';
		$this->template->rfloat=array(array('name'=>'管理','url'=>'/?sk=admin'),array('name'=>'首页','url'=>'/'));	
		if (substr($sk,0,2)==='ad')
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
	 		
	 		switch ($sk){
	    		//会展设置
	    		case 'meet':{
                    $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,strlen($sk)).'\'});</script>';
	    			$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meet","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;
			    
	    	    case 'meetnew':{
	    	    	$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetnew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;		  
      
			    case 'meetedit':{
   	                $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,4).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;

                //客户管理
			    case 'custmt':{
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmeetjoin","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			      	
			    }break;		

			    case 'custmtview':{
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	
	    	    	';
			      	
			    }break;		
			    
			    case 'custropose':{
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,10).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custropose","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	
	    	    	';
		   	
			    }break;
			    
			    case 'custorder':{
			    	$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,9).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtorder&bdate='.$bdate.'&edate='.$edate.'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>
	    	    	
	    	    	';
			    }break;
			    
			    case 'custmtcart':{  //参会购物栏
			        $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->userid,6).'\'});</script>';
	    	    	$this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtgettmpcart","id":"contentcol","loadingid":"loadingIndicator"});</script>
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
                             <script>Azhai.onPages({"type":"css","css":["/media/js/jwysiwyg/jquery.wysiwyg.css?'.time().'"]});</script>
                             <script>Azhai.onPages({"type":"js","js":["/media/js/jwysiwyg/jquery.wysiwyg.js?'.time().'"]});</script>
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