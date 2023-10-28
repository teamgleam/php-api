<?php

namespace Gleam;

class User extends GleamBase
{
    public function me()
    {
        return $this->_call( 'get', 'users/me' );
    }

    public function retrieve( $id )
    {
        return $this->_call( 'get', 'users/' . $id );
    }
}