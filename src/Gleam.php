<?php

namespace Gleam;

class Gleam extends GleamBase
{
    public $authentication;
    public $user;
    public $operator;
    public $job;
    public $property;
    public $booking;
    public $invoice;
    public $notification;

    public $invoiceItem;
    public $transaction;

    public function __construct( $params )
    {
        parent::__construct( $params );

        $this->authentication = new Authentication( $params );
        $this->user = new User( $params );
        $this->operator = new Operator( $params );
        $this->job = new Job( $params );
        $this->property = new Property( $params );
        $this->booking = new Booking( $params );
        $this->invoice = new Invoice( $params );
        $this->invoiceItem = new InvoiceItem( $params );
        $this->transaction = new Transaction( $params );
        $this->notification = new Notification( $params );
    }
}