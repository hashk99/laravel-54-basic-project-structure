<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {  
    	if (!Auth::user()->isAdmin()) {
            return view('errors.403');
        }

        dd( Auth::user()->user_role->role ) ;
        return view('home');
    }

    public function reviewerIndex()
    { 
    	if (!Auth::user()->isCommonReviewAdmin()) {
            return view('errors.403');
        }
        echo 2;
        return view('home');
    }
    
    public function researcherIndex()
    { 
    	if (!Auth::user()->isResearcher()) {
            return view('errors.403');
        }
        echo 3;
        return view('home');
    }
}
