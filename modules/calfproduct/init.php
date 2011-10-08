<?php defined('SYSPATH') or die('No direct script access.');

Route::set('product', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'product',
		'action'     => 'index',
	));