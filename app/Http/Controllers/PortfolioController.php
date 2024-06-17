<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
        $this->middleware('verified')->except(['show']);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = Portfolio::where('user_id',(auth()->user()->id))->firstOrFail();
        return view("portfolio.index", compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolio = Portfolio::where('user_id',$id)->firstOrFail();
        return view("portfolio.show", compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::where('user_id',(auth()->user()->id))->firstOrFail();
        return view("portfolio.edit", compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = Portfolio::where('user_id',(auth()->user()->id))->firstOrFail();
        $input = $request->all();
        $portfolio->fill($input)->save();
        return view("portfolio.index", compact('portfolio'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
