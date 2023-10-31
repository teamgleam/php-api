<?php

namespace Gleam;

class Customer extends GleamBase
{
    public function list( $operator_id )
    {
        return $this->_call( 'get', 'operators/' . $operator_id . '/customers' );
    }
}