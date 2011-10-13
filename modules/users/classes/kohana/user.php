<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * MSSQL Database Driver
 *
 * @package    Core
 * @author     Kohana Team
 * @copyright  (c) 2007-2008 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Kohana_User
{
	/**
	 * Database connection link
	 */
	protected $session;
	
	
	public static function instance($config = NULL)
	{ 
			
		return new Kohana_User($config);
	}
	
	/**
	 * Sets the config for the class.
	 *
	 * @param  array  database configuration
	 */
	public function __construct($config)
	{
		$this->session = Session::instance();
	  	
	}

	/**
	 * Closes the database connection.
	 */
	public function __destruct()
	{
		
	}
	
	
	private function check_user($user,$psw){
		
		$users = Kohana::$config->load('odbc')->users;		
		foreach ($users as $key => $value) {
			if (($key==$user) and ($value==$psw))
			{
			  return TRUE;		
			}
		}
		return FALSE;
	}

	/**
	 * Make the connection
	 *
	 * @return return connection
	 */
	public function login($user,$psw){
      
		if ($this->check_user($user,$psw))
		{
			$this->session->set('userid','admin');	
			return TRUE;  
		}
		
		return FALSE;
	}
	
	public function islogin(){
		$userid = $this->session->get('userid');
		$result = !empty($userid) ? TRUE: FALSE ;
		return $result;
	}
	
	public function loginout(){
		
		$this->session->delete('userid','admin');	
	}
	
}