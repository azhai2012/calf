<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {


	private  $template='';
    private  $session;
	public function before(){
		$this->template= View::factory('login');
		$this->session = Session::instance();
	}

	public function action_index()
	{	
		parent::before();
		$this->template->info = '';
		
		if ($_POST)
		{
		  if (Captcha::valid(Arr::get($_POST,'lcaptcha'))){
             
		  	 $user=Arr::get($_POST,'lusername');
             $psw=Arr::get($_POST,'lpassword');
		  	 $result = DB::query(Database::SELECT,"SELECT * FROM users WHERE userid=:userid ",TRUE)
		  	      ->param(":userid",$user)
		  	      ->as_object()		  	      
		  	      ->execute();
		  	 if (count($result)>0){
		  	    $password='';
                $userid='';
                $roleid='';
                $username='';
                foreach ($result as $key=>$value){
                	$password = $value->password;
             	    $userid= $value->userid;
             	    $roleid= $value->role_id;
             	    $username= $value->username;
             	
                 }  
                 
                if (md5($psw)=== $password){

                	$this->session->set('userlogin',array('userid'=>$userid,'username'=>$username,'roleid'=>$roleid));
                    $this->request->redirect('/');            	
                }
                else 
                 $this->template->info='<div class="showinfo error">密码错误！</div>'; 
		  	 }
		  	 else
		  	   $this->template->info='<div class="showinfo error">用户名不存在！</div>';
             
		  }
		  else 
		   $this->template->info='<div class="showinfo error">验证码有误！</div>';
		  
		}
		
	}
	
	public function after(){
		$this->request->response = $this->template;
	}
	
	

} // End Welcome