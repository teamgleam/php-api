<?php

namespace Gleam;

class Operator extends GleamBase
{
    public function retrieve( $id )
    {
        return $this->_call( 'get', 'operator/' . $id );
    }
}