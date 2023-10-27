<?php

namespace Gleam;

class Job extends GleamBase
{
    public function retrieve( $operator_id, $job_id )
    {
        return $this->_call( 'get', 'operator/' . $operator_id . '/job/' . $job_id );
    }

    public function reschedule( $operator_id, $job_id, $params = [] )
    {
        return $this->_call( 'post', 'operator/' . $operator_id . '/job/' . $job_id . '/reschedule', $params );
    }
}