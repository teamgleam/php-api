<?php

namespace Gleam;

class User extends GleamBase
{
    public function me()
    {
        return $this->_call( 'get', 'users/me' );
    }

    public function device_create( $params = [] )
    {
        return $this->_call( 'post', 'users/me/devices', $params );
    }

    public function retrieve( $id )
    {
        return $this->_call( 'get', 'users/' . $id );
    }
}