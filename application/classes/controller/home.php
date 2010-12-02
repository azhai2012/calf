<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {


	private  $template='';
	private $model;
	private $ghsid;

	public function before(){
		$this->template= View::factory('welcome');
		$this->model= new Model_Menus();
		$this->session = Session::instance();
		$asession =$this->session->as_array();
		$this->ghsid= $asession['userlogin']['ghsid'];
	}
	
	public function action_index()
	{	
		parent::before();
		$sk = array_key_exists('sk',$_GET)?$_GET['sk']:'';
		$fl = array_key_exists('fl',$_GET)?$_GET['fl']:'';
		
	    $u = new Calf_Menus();
		$result = Calfpub::getmenus($u);
		$head=''; 
	    foreach ($result as $key => $value){
	    	$head.= $key.":".$value->name;
	    } 
	    $this->template->contentcol='';
	    $this->template->head=$head;
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
	 		$this->template->menus='<script>Azhai.onPages({"type":"","id":"navside","content":\''.$this->model->get_id_sub_menus($this->ghsid,4).'\'});</script>';
	    	
	    	switch ($sk){
	    		//会展设置

	    		case 'meet':{
	    		 $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meet","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;
			    
	    	    case 'meetnew':{
	    	     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetnew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;		  
      
			    case 'meetedit':{
	    	     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetview&fl='.$fl.'","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }break;

			  
			    
			    //供货商管理
			    case 'supm':{
	    	     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supmt","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                       
			     }break;
			    
			    case 'supmnew':{
			    	
	    	     $this->template->contentcol ='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supnew","id":"contentcol","loadingid":"loadingIndicator"});</script>';
                 $this->template->contentcol .='
                                      <script type="text/javascript">
                                        function keyshowdialogs(){
                                            var e = event ? event : (window.event ? window.event : null);        
                                             if(e.keyCode == 13){  
                                                Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":"/ajax?sk=supselectproc",
                                                                "content":{"div":"hello","top":"47px","width":"600px"}});
                                                e.returnValue = false;  
                                             }  
                                             /*var d = document,o = d.getElementById("list"),index=0,count=o.rows.length;
		                                     d.onkeydown = function(e){
			                                 e = e||event;
			                                  if(e.keyCode==38||e.keyCode==40){
			 	                              o.rows[index].className = "";
				                             index = e.keyCode==38?index-1<0?count-1:index-1:index+1==count?0:index+1;
				                              o.rows[index].className = "high";
		                                   	}
		                                   	
		                                  }*/
                                          
			                            }
                                        function showdialogs()
                                        {
                                           Azhai.onPages({"id":"dragDiv","type":"dialog","ajax":"/ajax?sk=supselectproc",
                                            "content":{"div":"hello","top":"47px","width":"600px"}});    
			                            }
			                            function closedialog(){
			                                $("#fullbg").css("display", "none");
                                            $(".dragDiv").css("display", "none");
			                            }
			                            
			                           
	                                     </script>';
			    }break;
			    
			    
			    
			    
			    default : {
			    	$this->template->contentcol='<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=build","id":"contentcol","loadingid":"loadingIndicator"});</script>';
			    }
			    
			    
			    
			    
			    
	    	}
		}
		
		$this->template->css ='<script>Azhai.onPages({"type":"css","css":["/media/css/apps.css?'.time().'"]});</script>
	                           <script>Azhai.onPages({"type":"js","js":["/media/js/meet.js?'.time().'"]});</script>
	                           <script>Azhai.onPages({"type":"js","js":["/media/js/sups.js?'.time().'"]});</script>
	                           ';
	    
	    
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome