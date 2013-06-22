<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SNT3 - The IT Division of Dwellings Group',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'emt',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
                        'caseSensitive'=>false,
			'rules'=>array(
                                'it-outsourcing' => array('site/Itoutsourcing', 'caseSensitive'=>false),
                                'services' => array('site/services', 'caseSensitive'=>false),
                                'talent-acquisition' => array('site/TalentAcquisition', 'caseSensitive'=>false),
                                'hosted-solutions' => array('site/HostedSolutions', 'caseSensitive'=>false),
                                'offshore-service-offering' => array('site/OffshoreServiceOffering', 'caseSensitive'=>false),
                                'about-us' => array('site/about', 'caseSensitive'=>false),
                                'contact' => array('site/contact', 'caseSensitive'=>false),
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=primesolve',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'adminEmail'=>'danesh.manjula@snt3.com',
                'SMTP_Host'=>'smtp.gmail.com',
                'SMTP_Port'=>'465',
                'SMTP_Username'=>'danesh.manjula@snt3.com',
                'SMTP_password'=>'Danesh@123',
                'SMTPSecure'=>TRUE,
                'SMTPDebug'=>FALSE
	),
);