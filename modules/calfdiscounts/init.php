<?php defined('SYSPATH') or die('No direct script access.');

Route::set('discounts', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'discounts',
		'action'     => 'index',
	));