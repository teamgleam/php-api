<?php

namespace Gleam;

class Transaction extends GleamBase
{
    public function retrieve( $invoice_id )
    {
        return $this->_call( 'get', 'transactions/' . $invoice_id );
    }
}