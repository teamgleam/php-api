<?php

namespace Gleam;

class Notification extends GleamBase
{
    public function retrieve( $id )
    {
        return $this->_call( 'get', 'notifications/' . $id );
    }

    public function read( $id )
    {
        return $this->_call( 'post', 'notifications/' . $id . '/read' );
    }
}