<?php

namespace Gleam;

use Curl\Curl;

class Gleam extends GleamBase
{
    public function __construct($apiKey)
    {
        parent::__construct($apiKey);
        echo $apiKey;
    }

    public function _call( $method, $endpoint, $params )
    {
        $curl = new Curl();
        $curl->{$method}( 'http://api.teamgleam.test/v1/', $params );
        return $curl->response;
    }
}