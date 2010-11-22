<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Pub {

	public static function getmenus(Kohana_Deeb $calf){
		$result = $calf->getmenus();
		return $result;
	}
	
	// @todo: 增加设置文件，记录所有功能的配置文件，权限和角色在数据库中需选择，先实现角色功能。

	/*
	 public static function factory(array $config = array())
	 {
		return new Azhaipub($config);
		}

		public function __construct(array $config = array())
		{

		}

		public function __toString()
		{

		}

		public function __get($key)
		{
		return isset($this->$key) ? $this->$key : NULL;
		}

		public function __set($key, $value)
		{
		$this->setup(array($key => $value));
		}
		*/

} // End Pagination