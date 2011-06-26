<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {


	private  $template='';
	private  $session;
	public function before(){
		$this->template= View::factory('login');
		$this->session = Session::instance();
	}

	function GetIP() { //获取IP
		if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else if (isset($_SERVER["HTTP_CLIENT_IP"])) //开源代码OSPhP.COm.CN
		$ip = $_SERVER["HTTP_CLIENT_IP"];
		else if (isset($_SERVER["REMOTE_ADDR"]))
		$ip = $_SERVER["REMOTE_ADDR"];
		else if (getenv("HTTP_X_FORWARDED_FOR")) //OSPHP.com.CN
		$ip = getenv("HTTP_X_FORWARDED_FOR");
		else if (getenv("HTTP_CLIENT_IP"))
		$ip = getenv("HTTP_CLIENT_IP");
		else if (getenv("REMOTE_ADDR")) //OsPHP.COM.CN
		$ip = getenv("REMOTE_ADDR");
		else
		$ip = "Unknown";
		return $ip;
	}

	public function action_index()
	{
		parent::before();

		// @todo 修改功能
           
		$this->template->info = '';
		$this->template->descripts= '海内存知己，天涯若比邻！';

		/*if(strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 6.0"))
		 {
			$this->template->descripts='<div style="padding-left:100px;text-align:left;font-size:14px;">
			<p>目前您使用的是IE6，请升级到IE 7 以上的版本。否则无法登录！</p>
			<p>推荐浏览器下载地址如下：</p>
			<ol>
			<li><a href="http://www.microsoft.com/china/windows/downloads/ie/getitnow.mspx">下载 IE 7 浏览器</a></li>
			<li><a href="http://www.mozillaonline.com/">下载 FireFox（火狐狸）浏览器 </a></li>
			<li><a href="http://www.google.com.hk/chrome?hl=zh-CN&brand=CHMI/">下载 chrome（谷歌）浏览器 </a></li> 
			</ol>
			</div>';
			$this->template->info='<div class="showinfo warning">您目前使用的ie6版本，为您的信息安全请升级为ie7以上版本！</div>'; 
			}
			else */
		if ($_POST)
		{

			$cp =  Captcha::valid(Arr::get($_POST,'lcaptcha'));
			if ($cp){
					
				$user =Arr::get($_POST,'lusername');
				$psw = Arr::get($_POST,'lpassword');
				$result = DB::query(Database::SELECT,"SELECT * FROM admin_user WHERE is_active=1 and username=:userid  ",TRUE)
				->param(":userid",$user)
				->as_object()
				->execute();
				if (count($result)>0){
					$password='';
					$userid='';
					$roleid='';
					$username='';
					$ip='';
					foreach ($result as $key=>$value){
						$password = $value->password;
						$userid= $value->user_id;
						$username= $value->username;
						//$adr = $value->localadr;
						$istype = $value->is_active;
					}

					if (md5($psw)=== $password){
						
						$ip = $this->GetIP();
							
						if ($istype==='终端')
						{
							$resultdb = DB::query(Database::SELECT,"SELECT left(adr,5) as adr FROM ip_js WHERE ip1<:ip and ip2>:ip ",TRUE)
							->param(":ip",ip2long($ip));

							//echo Kohana::debug((string) $resultdb);

							$resultdb =$resultdb->as_object()->execute();
							$result1 =$resultdb->as_array();
							print_r($result1);
							$checkip= $result1[0]->adr;
							if ($checkip===$adr){
								$this->session->set('userlogin',$result->as_array());
								$this->request->redirect('/admin');
							}
							else
							$this->template->info='<div class="showinfo warning">请在本辖区（'.$adr.'）内使用，谢谢配合！</div>'; 

						}
						else
						{
							$this->session->set('userlogin',$result->as_array());
							$this->request->redirect('/admin');
						}
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
		$this->response->body($this->template);
	}



} // End Welcome