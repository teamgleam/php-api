<?php

namespace Gleam;

use Curl\Curl;

abstract class GleamBase
{
    protected $apiKey;
    protected $auth;
    protected $returnType;

    protected function __construct( $params )
    {
        $this->apiKey = $params['apiKey'];
        $this->auth = $params['userAuth'];
        $this->returnType = ( isset( $params['returnType'] ) && $params['returnType'] ) ? $params['returnType'] : 'object';
    }

    protected function _call( $method, $endpoint, $params = [] )
    {
        $curl = new Curl();
        $curl->setHeader( 'apiKey', $this->apiKey );
        if( $this->auth ){
            $curl->setBasicAuthentication( $this->auth );
        }
        $curl->{$method}( 'http://api.teamgleam.test/v1/' . $endpoint, $params );

        if( $this->returnType == 'object' ){
            return $curl->response;
        }elseif( $this->returnType == 'array' ){
            return json_decode( json_encode( $curl->response ), true );
        }
    }
}