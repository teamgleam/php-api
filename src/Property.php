<?php

namespace Gleam;

class Property extends GleamBase
{
    public function list( $operator_id )
    {
        return $this->_call( 'get', 'operators/' . $operator_id . '/properties' );
    }
}