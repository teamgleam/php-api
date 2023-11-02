<?php

namespace Gleam;

class Booking extends GleamBase
{
    public function retrieve( $booking_id )
    {
        return $this->_call( 'get', 'bookings/' . $booking_id );
    }

    public function update( $booking_id, $params = [] )
    {
        return $this->_call( 'put', 'bookings/' . $booking_id );
    }

    public function rebase( $booking_id, $params )
    {
        return $this->_call( 'post', 'bookings/' . $booking_id . '/rebase', $params );
    }

    public function frequency( $booking_id, $params )
    {
        return $this->_call( 'post', 'bookings/' . $booking_id . '/frequency', $params );
    }

    public function cancel( $booking_id, $params )
    {
        return $this->_call( 'post', 'bookings/' . $booking_id . '/cancel', $params );
    }
}