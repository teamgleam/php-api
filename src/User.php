<?php

namespace Gleam;

class User extends GleamBase
{
    public function me()
    {
        return $this->_call( 'get', 'me' );
    }

    public function device_create( $params = [] )
    {
        return $this->_call( 'post', 'me/devices', $params );
    }
}