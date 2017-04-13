<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'cache'=>array(
				'class'=>'system.caching.CMemCache',
				'servers'=>array(
						array('host'=>'server1', 'port'=>11211, 'weight'=>60),
						array('host'=>'server2', 'port'=>11211, 'weight'=>40),
				),
		),
		// uncomment the following to set up database
		/*
		'db'=>array(
			'connectionString'=>'Your DSN',
		),
		*/
	),
);