<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Gellary;
use App\Plan;
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
        $plan=Plan::all();
        return view('front.layouts.app',compact('slider','gallery','plan'));
    }

    // public function slider()
    // {
    //     // $slider=Slider::all();
    //     // return view('front.layouts.app',compact('slider'));
    // }
}
