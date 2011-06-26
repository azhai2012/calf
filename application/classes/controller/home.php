<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {


	private  $template='';
	private $model;
	private $userid;
	private $roleid;
	private $isadmin=0;
	private $username='';

	public function before(){
		$this->template= View::factory('admin');
		$this->model= new Model_Menus();
		
		$islogin = $this->model->checklogin();
		
		if (isset($islogin))
		{
		  if ($islogin['islogin'])
		  {	
	         $this->sess  = (object)$islogin['result'];
		  }
	      else
	        $this->request->redirect($islogin['links']);
  	    } 
        else
            $this->request->redirect($islogin['links']);
		
	    $this->userid= $this->sess->user_id;
		$this->roleid= '1';;
		$isadmin= ($this->sess->extra==='N;') ?1:0;
	}
	
	public function action_index()
	{	
		parent::before();
		$sk = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$fl = array_key_exists('fl',$_GET)?$_GET['fl']:'';
		
		$date = explode(',',$fl); 
		 
		$bdate = (!empty($date[0]))?$date[0]:date('Y-m-d');
		$edate = (!empty($date[1]))?$date[1]:date('Y-m-d');
        
		$this->template->info= array('id'=>$this->userid);
	    $this->template->contentcol='';
	    $this->template->head='';//$head;
	    $this->template->css='';
		if ($this->isadmin===1)
	    $this->template->rfloat=array(array('name'=>'管理','url'=>'/admin?sk=admin'),array('name'=>'首页','url'=>'/admin'));
	    else 
	    $this->template->rfloat=array(array('name'=>'首页','url'=>'/admin'));
	    //管理类的功能
	  	if (substr($sk,0,2)==='ad' && $this->isadmin==1)
		{
		 
		   $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_admin_menus().'\'});</script>';

		   $this->template->contentcol ='';
		   $contentcol = Kohana::config('work/contentcol')->contentcol;
		   $css        = Kohana::config('work/css')->css;
		   foreach($contentcol as $key=>$value)
		   {
		   	  if ($key===$sk)
		   	  {
		   	  	
		   	  	if (isset($value['params']['param'])) 
		   	  	{
		   	       $p=array();		
		   	  	   $p1= ':p';	
		   	  	   $p[$p1] = $fl;
		   	  	   $this->template->contentcol = strtr($value['values'],$p);		  
		   	  	}
		   	  	else
		   	  	  $this->template->contentcol = $value['values'];	
		   	  	  	   	  	
		   	    break;
		   	  }
		   }
		   
		   foreach($css as $key=>$value)
		   {
		   	  if ($key===$sk)
		   	  {		   	    
		   	  	$this->template->css = $value['values'];	   	  	
		   	    break;
		   	  }
		   }
		   
			
		}
	 	else  //模块功能
	 	{
	 		
	 	  	    $this->template->css='';
	 			$this->template->contentcol='';
	 			$this->template->menus='';
	 			
	 	   $contentcol = Kohana::config('work/contentcol')->contentcol;
		   $css        = Kohana::config('work/css')->css;
		   $menus      = Kohana::config('work/menu')->menus;
		   
           
		   foreach($contentcol as $key=>$value)
		   {
		   	  
		   	  if ($key===$sk)
		   	  {
		   	  	
                if (isset($value['params']['param'])) 
		   	  	{
                   
		   	  	   if (count($value['params']['param'])>1)  
                   {
		   	  		 $p=array();
		   	  	     $p[':p1'] = $bdate;
		   	  	     $p[':p2'] = $edate;
		   	  	     $this->template->contentcol = strtr($value['values'],$p);	
                   }
                   else
                   {
                     $p=array();
		   	  	     $p[':p'] = $fl;
		   	  	    
		   	  	     $this->template->contentcol = strtr($value['values'],$p);	
                   
                   }
		   	  	}
		   	  	else
		   	  	   $this->template->contentcol = $value['values'];		   	  	   
		   	      	  	
		   	    break;
		   	  }
		   }
		   
		   foreach($css as $key=>$value)
		   {
		   	  if ($key===$sk)
		   	  {		   	    
		   	  	$this->template->css = $value['values'];	   	  	
		   	    break;
		   	  }
		   } 

		    foreach($menus as $key=>$value)
		   {
              if ($key===$sk)
		   	  {	
		        $len       = $value['params']['len']; 
		   	    $param     = $value['params']['param'];
		   	    $m = $param['content'];
	          
		   	    $p[$m] = $this->model->get_id_sub_menus($this->userid,$len);
		   	    $ms=  strtr($value['values'],$p);
		   	    $this->template->menus = $ms;	  	
		   	    break;
		   	  }
		   } 

		   if (empty($this->template->menus)){
		   	  $this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":"'.$this->model->get_id_sub_menus($this->userid,30).'"});</script>';
		   }
 
		}
	    
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome