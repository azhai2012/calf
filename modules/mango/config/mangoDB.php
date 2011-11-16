<?php

return array(

	/**
	 * Configuration Name
	 *
	 * You use this name when initializing a new MangoDB instance
	 *
	 * $db = MangoDB::instance('default');
	 */
	'default' => array(

		/**
		 * Connection Setup
		 * 
		 * See http://www.php.net/manual/en/mongo.construct.php for more information
		 *
		 * or just edit / uncomment the keys below to your requirements
		 */
		'connection' => array(

			/** hostnames, separate multiple hosts by commas **/
			'hostnames' => '127.0.0.1:10001',

			/** database to connect to **/
			'database'  => 'calfs',

			/** authentication **/
			'username'  => 'azhai',
			'password'  => 'azsOFT',

			/** connection options (see http://www.php.net/manual/en/mongo.construct.php) **/
			//'options'   => array(
				// 'persist'    => 'persist_id',
				// 'timeout'    => 1000, 
				// 'replicaSet' => TRUE
			//)
		),

		/**
		 * Whether or not to use profiling
		 *
		 * If enabled, profiling data will be shown through Kohana's profiler library
		 */
		'profiling' => FALSE
	)
);