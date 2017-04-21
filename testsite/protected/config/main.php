<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Autocomplete',

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
						array('host'=>'localhost', 'port'=>11211, 'weight'=>100),
				),
		),
		'urlManager' => array(
				'urlFormat' => 'path',
				'showScriptName'=>false,
				'rules' => array(
						'' => 'site/index',
						'find' => 'site/autocomplete',
						'find2' => 'site/autocomplete2',
						'result' => 'site/test',
						'result2' => 'site/cachetest',
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