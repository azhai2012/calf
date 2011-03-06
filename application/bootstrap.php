<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Asia/Shanghai');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (getenv('KOHANA_ENV') !== FALSE)
{
	Kohana::$environment = constant('Kohana::'.strtoupper(getenv('KOHANA_ENV')));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
    'index.php' => '',
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);


/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'oauth'      => MODPATH.'oauth',      // OAuth authentication
	 'pagination' => MODPATH.'pagination', // Paging of results
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	 'mssql'      => MODPATH.'mssql',
     'captcha'    => MODPATH.'captcha',
     'calfpub'    => MODPATH.'calfpub',
     //'calfmeet'   => MODPATH.'calfmeet', // add to ajax.php if ($mods === '')  $mods  = Calfmeet::factory($_get)->get_menus($Prams);
     //'calfcustomer'   => MODPATH.'calfcustomer', //add to ajax.php if ($mods === '')  $mods  = CalfSupplier::factory($_get,$Prams)->get_menus();
     //'calfsupplier'   => MODPATH.'calfsupplier', //add to ajax.php if ($mods === '')  $mods  = CalfCustomer::factory($_get,$Prams)->get_menus(); 


   ));


/*
 * 根据配置文件，增加模块 
  
$modules= Kohana::config('settings')->openmods;

foreach ($modules as $key => $value){
      Kohana::modules(Kohana::modules()+array($value=> MODPATH.$value)); 
}


// @todo 各种模块的设计
/*
 * 加载模块的功能说明：
 * 
 * 原则: 根据系统需要生成各种模块的加载。
 * 优点：便于分发程序设计，将各个单独的模块分开，实现任务的下发。
 * 缺点：需要调整主模块的动态加载功能，设计较复杂。
 * 
 * 关键点：
 * 1、根据各个模块的需要，需要注意在主模块中加载的css文件 和js文件的。
 *    方案：在加载该子模块时，扫描该目录下的配置文件，实现动态的加入。
 *    
 * 2、菜单的调用要考虑各子模块的功能。   
 * 
 * 
 */

   
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));