<?php

namespace Gleam;

class Authentication extends GleamBase
{
    public function authenticate( $mobile )
    {
        return $this->_call( 'post', 'authentication', [
            'mobile'    => $mobile
        ]);
    }
}