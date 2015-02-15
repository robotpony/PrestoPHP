<?php

namespace NapkinWare\PrestoPHP;

/*
	$github = new Service(
		'Github',
		'https://api.github.com/'
	);

	print_r( $github->get('/orgs/:org/repos') );

	$github = new Service(
		'Github',
		'https://api.github.com/'
	);

	print_r( $github->get('/orgs/:org/repos') );
	print_r( $github->get('/orgs/:org/repos') );
	print_r( $github->get('/orgs/:org/repos') );



 */

class Service {
	private $service;
	private $url;
	private $credentials;

	public function __construct($service, $url) {

	}

	public function get($resource) {

	}
	public function put($resource) {

	}
	public function post($resource) {

	}
	public function delete($resource) {

	}
	public function options($resource) {

	}
	public function head($resource) {

	}

	/**/
	public function __call($fn, $args) {

	}

	private function request($resource, $method = 'get', $resourceType = 'json') {

	}
}