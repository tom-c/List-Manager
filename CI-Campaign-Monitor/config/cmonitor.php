<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CAMPAIGN MONITOR CONFIG FILE
|--------------------------------------------------------------------------
|
*/

	$config['ci_api_key']  = 'YOUR API KEY HERE';
	$config['ci_protocol'] = 'https';
	$config['ci_debug_level'] = 1000; // 0 = NONE , 250 = ERROR, 500 = WARNING, 1000 = VERBOSE
	$config['ci_host'] = 'api.createsend.com';
	$config['ci_log'] = NULL;
	$config['ci_serialiser'] = NULL;
	$config['ci_transport'] = NULL;
	

/*
|--------------------------------------------------------------------------
| CAMPAIGN MONITOR LISTS ARRAY
|--------------------------------------------------------------------------
|
*/

	/*
	 *
	 * Example setup (Allows easy access to all your lists)
	 *
		$config['ci_lists'] = array(
			'List Name' => 'API Subscriber List ID'
		);
	 *
	 *
	 */
	$config['ci_lists'] = array(
		'test' => 'YOUR LIST ID HERE'
	);	

