<?php

namespace Gleam;

class Transaction extends GleamBase
{
    public function retrieve( $transaction_id )
    {
        return $this->_call( 'get', 'transactions/' . $transaction_id );
    }

    public function refund( $transaction_id, $params = [] )
    {
        return $this->_call( 'post', 'transactions/' . $transaction_id . '/refund', $params );
    }
}