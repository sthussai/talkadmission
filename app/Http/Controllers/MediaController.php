<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\MentorController;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');

    }

    public function index()
    {
        $usertype = Auth()->user()->usertype;

        if ($usertype == 'applicant') {
            $user = Auth()->user()->userable;
            $mediaItems = $user->getMedia("avatar");
            return view("applicant.upload", compact('mediaItems'));
        }
        if ($usertype == 'mentor') {
            $user = Auth()->user()->userable;
            $mediaItems = $user->getMedia("avatar");
            return view("mentor.upload", compact('mediaItems'));
        }

        return redirect()->back();


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usertype = Auth()->user()->usertype;
        if (!$request->hasFile('image')) {
            return back()->with('success', 'No image selected!');
        }
        $user = Auth()->user()->userable;
        $user->addMedia($request->file('image'))->toMediaCollection('avatar');
        $user = auth()->user();
        $user->avatar_url = "https://www.w3schools.com/w3images/avatar2.png";
        $user->save();
        return back()->with('success', 'Image uploaded Successfully!');

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $avatar = Auth()->user()->userable->getMedia('avatar')->first()->getUrl('thumb');
        $user->avatar_url = $avatar;
        $user->save();
        return back()->with('success', 'Avatar updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if ($request->id) {

            $user = Auth()->user()->userable;
            $media = $user->getMedia('avatar')->where('id', $request->id)->first();
            $media->delete();
            $user = auth()->user();
            $user->avatar_url = "https://www.w3schools.com/w3images/avatar2.png";
            $user->save();
            return back()->with('success', 'Image deleted Successfully!');
        }
    }
}
