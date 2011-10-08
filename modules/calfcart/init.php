<?php defined('SYSPATH') or die('No direct script access.');

Route::set('cart', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'cart',
		'action'     => 'index',
	));