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


	private function request($resource, $method = 'get', $resourceType = 'json') {

	}

	static function decompose($resource, $explicitType = null) {
		$defaults = array(
			'scheme' => 'http',
			'host' => 'localhost',
			'path' => '',
			'query' => (object) array()
		);

		$url = parse_url($resource);
		$url = (object) array_merge($defaults, $url);

		if (!empty($url->query) && is_string($url->query)) {
			parse_str($url->query, $q);
			$url->query = (object) $q;
		}

		$parts = preg_split('/\//', $url->path, -1, PREG_SPLIT_NO_EMPTY);

		$type = $explicitType;
		if ( ( $at = strrpos($url->path, '.') ) ) {
			$type = substr($url->path, $at + 1);
		}

		$url->path = (object) array(
			'raw' => $url->path,
			'parts' => $parts,
			'type' => $type,
			'explicitType' => $explicitType,
			'vars' => preg_grep("/\:[^\/\.]/", $parts)
		);
		
		return (object) $url;
	}
}
