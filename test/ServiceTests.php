<?php

/* Tests for Service library */

include_once('lib/Service.php');

use NapkinWare\PrestoPHP\Service;

class ServiceTests extends PHPUnit_Framework_TestCase {
    public function testURIDecomposition() {

    $parts = Service::decompose('/orgs/:org/repos');
    print_r($parts);
    $parts = Service::decompose('//api.github.com/orgs/:org/:repos');
    print_r($parts);
    $parts = Service::decompose('https://api.github.com/repositories');
    print_r($parts);
    $parts = Service::decompose('https://api.github.com/repositories', 'application/json');
    print_r($parts);
    $parts = Service::decompose('https://api.github.com/orgs/:org/repos');
    print_r($parts);
    $parts = Service::decompose('https://api.github.com/orgs/:org/repos');
    print_r($parts);
    $parts = Service::decompose('https://api.github.com/orgs/:org/repos.json?page=2&limit=5');
    print_r($parts);

//        $this->assertEquals(-1, $b->getAmount());

    }
}
