<?php

namespace Gleam;

class Authentication extends GleamBase
{
    public function authenticate( $mobile )
    {
        return $this->_call( 'post', 'auth', [
            'mobile'    => $mobile
        ]);
    }

    public function verify( $userId, $code )
    {
        return $this->_call( 'post', 'auth/verify', [
            'user'      => $userId,
            'code'      => $code
        ]);
    }
}