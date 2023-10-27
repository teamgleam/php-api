<?php

namespace Gleam;

class Gleam extends GleamBase
{
    public $authentication;
    public $user;
    public $operator;
    public $job;

    public function __construct( $params )
    {
        parent::__construct( $params );

        $this->authentication = new Authentication( $params );
        $this->user = new User( $params );
        $this->operator = new Operator( $params );
        $this->job = new Job( $params );
    }
}