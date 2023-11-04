<?php

namespace Gleam;

class InvoiceItem extends GleamBase
{
    public function retrieve( $item_id )
    {
        return $this->_call( 'get', 'invoiceitems/' . $item_id );
    }

    public function create( $params )
    {
        return $this->_call( 'post', 'invoiceitems', $params );
    }

    public function update( $item_id, $params )
    {
        return $this->_call( 'put', 'invoiceitems/' . $item_id, $params );
    }

    public function delete( $item_id )
    {
        return $this->_call( 'delete', 'invoiceitems/' . $item_id );
    }
}