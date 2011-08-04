<?php defined('SYSPATH') or die('No direct script access.');

Route::set('tuan', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'tuan',
		'action'     => 'index',
	));