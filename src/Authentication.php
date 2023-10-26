<?php

namespace Gleam;

class Authentication
{
    public function authenticate( $mobile )
    {
        return $this->_call( 'post', 'authentication', [
            'mobile'    => $mobile
        ]);
    }
}