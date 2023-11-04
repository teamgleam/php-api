<?php

namespace Gleam;

class Invoice extends GleamBase
{
    public function retrieve( $invoice_id )
    {
        return $this->_call( 'get', 'invoices/' . $invoice_id );
    }

    public function finalise( $invoice_id, $params )
    {
        return $this->_call( 'post', 'invoices/' . $invoice_id . '/finalise', $params );
    }

    public function pay( $invoice_id, $params )
    {
        return $this->_call( 'post', 'invoices/' . $invoice_id . '/pay', $params );
    }

    public function void( $invoice_id, $params )
    {
        return $this->_call( 'post', 'invoices/' . $invoice_id . '/void', $params );
    }
}