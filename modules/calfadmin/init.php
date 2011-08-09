<?php defined('SYSPATH') or die('No direct script access.');

Route::set('admin', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'admin',
		'action'     => 'index',
	));