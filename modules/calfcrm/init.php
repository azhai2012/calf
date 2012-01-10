<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2012-01-10 
 * @copyright 2012 
 *
 */
Route::set('admin', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'admin',
		'action'     => 'index',
	));
