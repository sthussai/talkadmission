<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserIsApplicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(UserIsApplicant::class);

    }
    public function index(Request $request)
    {
        $applicant = Auth()->user()->userable;
        $mediaItems = $applicant->getMedia("avatar");
        return view("applicant.upload", compact('mediaItems'));
    }


}
