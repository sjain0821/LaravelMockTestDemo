<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => '\\OAuth\\Common\\Storage\\Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => '',
			'client_secret' => '',
			'scope'         => [],
		],
		'Google' => [
    		'client_id'     => env('GOOGLE_CLIENT_ID'),
		    'client_secret' => env('GOOGLE_SECRET_ID'),
    		'scope'         => ['userinfo_email', 'userinfo_profile'],
		],
		'GitHub' => [
    		'client_id'     => env('GITHUB_CLIENT_ID'),

		    'client_secret' => env('GITHUB_SECRET_ID'),
    		    		'scope'         => ['user:email'],

		],
	]

];