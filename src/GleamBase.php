<?php

namespace Gleam;

use Curl\Curl;

abstract class GleamBase
{
    protected $apiKey;
    protected $auth;

    protected function __construct( $params )
    {
        $this->apiKey = $params['apiKey'];
        $this->auth = $params['userAuth'];
    }

    protected function _call( $method, $endpoint, $params = [] )
    {
        $curl = new Curl();
        $curl->setHeader( 'apiKey', $this->apiKey );
        if( $this->auth ){
            $curl->setBasicAuthentication( $this->auth );
        }
        $curl->{$method}( 'http://api.teamgleam.test/v1/' . $endpoint, $params );
        return $curl->response;
    }
}