<?php

namespace Gleam;

class Property extends GleamBase
{
    public function retrieve( $id )
    {
        return $this->_call( 'get', 'properties/' . $id );
    }

    public function update( $id, $params = [] )
    {
        return $this->_call( 'put', 'properties/' . $id, $params );
    }
}