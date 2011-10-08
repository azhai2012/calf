<?php defined('SYSPATH') or die('No direct script access.');

Route::set('account', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'account',
		'action'     => 'index',
	));