<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class DashboardController extends Controller
{

    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'applicant')
            {
                return view('applicantdashboard');
            }
            else if($usertype == 'mentor')
            {
                return view('mentordashboard');
            }
            else {
                return redirect()->back();
            }
        }
    }

}
