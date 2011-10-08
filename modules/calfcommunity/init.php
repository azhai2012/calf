<?php defined('SYSPATH') or die('No direct script access.');

Route::set('community', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'community',
		'action'     => 'index',
	));