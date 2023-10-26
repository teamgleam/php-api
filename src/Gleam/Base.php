<?php

namespace Gleam;

class Base
{
    public function __construct( $apiKey )
    {
        echo $apiKey;
    }

    public function say_hello()
    {
        return 'say hello';
    }
}