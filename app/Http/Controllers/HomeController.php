<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function users()
    {
        $applicants = User::where('usertype', 'applicant')->get();
        $mentors = User::where('usertype', 'mentor')->get();

        return view('users', compact('applicants','mentors'));
    }
}
