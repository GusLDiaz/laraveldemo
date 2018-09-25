<?php
//	db config
Schema::create('sessions', function ($table) {
	$table->string('id')->unique();
	$table->string('ip_address', 45)->nullable();
	$table->unsignedInteger('user_id')->nullable();
	$table->text('user_agent')->nullable();
	$table->text('payload');
});
return [


	'driver' => env('SESSION_DRIVER', 'file'),


	'lifetime' => env('SESSION_LIFETIME', 120),

	'expire_on_close' => false,

	'encrypt' => false,


	'files' => storage_path('framework/sessions'),

	'connection' => env('SESSION_CONNECTION', null),

	/*
	| memcached session Driver- got to be configured with app's cache
	*/

	'store' => env('SESSION_STORE', null),


	/* clear the cache everyonce in a while*/
	'lottery' => [2, 100],

	/*

		 Cookie Name
		 */

	'cookie' => env(
		'SESSION_COOKIE',
		str_slug(env('APP_NAME', 'laravel'), '_') . '_session'
	),

	'path' => '/',

	/*
	| Session Cookie Domain
	*/

	'domain' => env('SESSION_DOMAIN', null),


	/*
	|--------------------------------------------------------------------------
	| HTTP Access Only
	|--------------------------------------------------------------------------
	|
	| Setting this value to true will prevent JavaScript from accessing the
	| value of the cookie and the cookie will only be accessible through
	| the HTTP protocol. You are free to modify this option if needed.
	|
	*/

	'http_only' => true,

	/*
	| Same-Site Cookies
	*/
	'same_site' => null

];
