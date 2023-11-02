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

    public function retrieve( $id )
    {
        return $this->_call( 'get', 'users/' . $id );
    }

    public function update( $id, $params = [] )
    {
        return $this->_call( 'put', 'users/' . $id, $params );
    }
}