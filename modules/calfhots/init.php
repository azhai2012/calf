<?php defined('SYSPATH') or die('No direct script access.');

Route::set('hots', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'hots',
		'action'     => 'index',
	));