<?php

namespace Gleam;

use Curl\Curl;

class Gleam
{
    protected $key;
    public $authentication;

    public function __construct( $apiKey, $options = [] )
    {
        $this->key = $apiKey;

        $this->authentication = new Authentication();
    }

    public function _call( $method, $endpoint, $params )
    {
        $curl = new Curl();
        $curl->{$method}( 'http://api.teamgleam.test/v1/' . $endpoint, $params );
        return $curl->response;
    }
}