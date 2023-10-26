<?php

namespace Gleam;

use Curl\Curl;

require_once 'Authentication.php';

class Gleam
{
    private $key;

    public $authentication;

    public function __construct( $params )
    {
        $this->apiKey = $params['apiKey'];

        $this->authentication = new Authentication( $params );
    }

    public function _call( $method, $endpoint, $params )
    {
        $curl = new Curl();
        $curl->setHeader( 'apiKey', $this->apiKey );
        $curl->{$method}( 'http://api.teamgleam.test/v1/' . $endpoint, $params );
        return $curl->response;
    }
}