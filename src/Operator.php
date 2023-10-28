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

    public function customers( $id, $params = [] )
    {
        return $this->_call( 'get', 'operators/' . $id . '/customers', $params );
    }

    public function properties( $id, $params = [] )
    {
        return $this->_call( 'get', 'operators/' . $id . '/properties', $params );
    }

    public function invoices( $id, $params = [] )
    {
        return $this->_call( 'get', 'operators/' . $id . '/invoices', $params );
    }

    public function users( $id, $params = [] )
    {
        return $this->_call( 'get', 'operators/' . $id . '/users', $params );
    }
}