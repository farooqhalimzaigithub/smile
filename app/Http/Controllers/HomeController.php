<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Gellary;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider=Slider::all();
        $gallery=Gellary::all();
        return view('front.layouts.app',compact('slider','gallery'));
    }

    // public function slider()
    // {
    //     // $slider=Slider::all();
    //     // return view('front.layouts.app',compact('slider'));
    // }
}
