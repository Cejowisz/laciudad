<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::take(3)->orderBy('created_at', 'desc')->get();
        return view('pages.home', compact('sliders'));
    }

    public function how()
    {
        return view('pages.how');
    }

    public function terms()
    {
        return view('pages.terms');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }

    public function about()
    {
        return view('pages.about');
    }
}
