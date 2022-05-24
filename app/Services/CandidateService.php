<?php

namespace App\Services;

use App\Models\Candidate;

class CandidateService
{
    /**
     * get all candidates and their jobs
     * @return builder
     */
    static function getAll()
    {
        return Candidate::with(['jobs' => function ($query) {
            $query->orderBy('ended_at', 'desc');
        }])->orderBy('id', 'asc')->get();
    }
}
