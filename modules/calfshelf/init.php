<?php defined('SYSPATH') or die('No direct script access.');

Route::set('shelf', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'shelf',
		'action'     => 'index',
	));