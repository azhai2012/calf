<?php defined('SYSPATH') or die('No direct script access.');

/*
 * 功能：公共类库（数据库类 ） 
 * @author zhaibob
 * 
 * 
 */

abstract class Kohana_Calfdb {
	
	public static $version = '1.0';

	public static function split_to_array($pattern,$input)
	{
		return split($pattern,$input);
	}
	
	
	
}
