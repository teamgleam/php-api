<?php

namespace Gleam;

class User extends GleamBase
{
    public function me()
    {
        return $this->_call( 'get', 'users/me' );
    }

    public function me_update( $params )
    {
        return $this->_call( 'put', 'users/me', $params );
    }
}