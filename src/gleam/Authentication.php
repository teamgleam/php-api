<?php

namespace Gleam;

class Authentication extends Gleam
{
    public function authenticate( $mobile )
    {
        return $this->_call( 'post', 'authentication', [
            'mobile'    => $mobile
        ]);
    }
}