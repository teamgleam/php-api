<?php

namespace Gleam;

abstract class GleamBase
{
    protected $apiKey;

    protected function __construct( $apiKey )
    {
        $this->apiKey = $apiKey;
    }
}