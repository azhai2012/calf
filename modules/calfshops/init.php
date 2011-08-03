<?php defined('SYSPATH') or die('No direct script access.');

Route::set('shops', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'shops',
		'action'     => 'index',
	));