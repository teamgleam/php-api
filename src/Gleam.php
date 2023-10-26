<?php

namespace Gleam;

class Gleam extends GleamBase
{
    public $authentication;

    public function __construct( $apiKey )
    {
        parent::__construct( $apiKey );

        $this->authentication = new Authentication( $apiKey );
    }
}