<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CandidateService;

class CandidateController extends Controller
{
    /**
     * get all candidates and their jobs
     */
    public function list()
    {
        $candidates = CandidateService::getAll();
        return view('candidates_list', compact('candidates'));
    }
}
