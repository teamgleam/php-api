<?php

namespace Gleam;

class Operator extends GleamBase
{
    public function retrieve( $id )
    {
        return $this->_call( 'get', 'operator/' . $id );
    }

    public function calendar( $id, $params = [] )
    {
        return $this->_call( 'get', 'operator/' . $id . '/calendar', $params );
    }
}