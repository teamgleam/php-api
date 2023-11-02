<?php

namespace Gleam;

class Invoice extends GleamBase
{
    public function retrieve( $invoice_id )
    {
        return $this->_call( 'get', 'invoices/' . $invoice_id );
    }
}