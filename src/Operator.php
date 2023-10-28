<?php

namespace Gleam;

class Operator extends GleamBase
{
    public function retrieve( $id )
    {
        return $this->_call( 'get', 'operators/' . $id );
    }

    public function calendar( $id, $params = [] )
    {
        return $this->_call( 'get', 'operators/' . $id . '/calendar', $params );
    }

    public function diary( $id, $params = [] )
    {
        return $this->_call( 'get', 'operators/' . $id . '/diary', $params );
    }
}