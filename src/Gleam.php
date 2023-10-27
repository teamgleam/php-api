<?php

namespace Gleam;

class Gleam extends GleamBase
{
    public $authentication;
    public $user;

    public function __construct( $params )
    {
        parent::__construct( $params );

        $this->authentication = new Authentication( $params );
        $this->user = new User( $params );
    }
}