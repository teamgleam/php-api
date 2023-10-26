<?php

namespace Gleam;

use Curl\Curl;

abstract class GleamBase
{
    protected $apiKey;

    protected function __construct( $apiKey )
    {
        $this->apiKey = $apiKey;
    }

    protected function _call( $method, $endpoint, $params )
    {
        $curl = new Curl();
        $curl->setHeader( 'apiKey', $this->apiKey );
        $curl->{$method}( 'http://api.teamgleam.test/v1/' . $endpoint, $params );
        return $curl->response;
    }
}