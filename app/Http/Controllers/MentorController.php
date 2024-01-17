<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\UserIsMentor;

class MentorController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware(UserIsMentor::class);

    }

}
