<?php

namespace NapkinWare\PrestoPHP;

/* Service (to service) library */

class Service {
	private $service;
	private $url;
	private $credentials;

	public function __construct($service, $url, $routes = array() ) {

	}

	public function routes($routes = null) {

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