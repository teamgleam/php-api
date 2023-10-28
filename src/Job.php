<?php

namespace Gleam;

class Job extends GleamBase
{
    public function retrieve( $job_id )
    {
        return $this->_call( 'get', 'jobs/' . $job_id );
    }

    public function reschedule( $job_id, $params = [] )
    {
        return $this->_call( 'post', 'jobs/' . $job_id . '/reschedule', $params );
    }

    public function reassign( $job_id, $params = [] )
    {
        return $this->_call( 'post', 'jobs/' . $job_id . '/reassign', $params );
    }

    public function cancel( $job_id, $params = [] )
    {
        return $this->_call( 'post', 'jobs/' . $job_id . '/cancel', $params );
    }

    public function message( $job_id, $params = [] )
    {
        return $this->_call( 'post', 'jobs/' . $job_id . '/messages', $params );
    }
}