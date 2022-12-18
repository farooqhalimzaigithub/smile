<?php

namespace App\Http\Controllers;

use App\Company_infos;
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
        $data['slider']=Slider::all();
        $data['plans']=Plan::all();
        // dd($slider);
         $data['gallery']=Gellary::latest()->take(6)->get();
         $data['company']=Company_infos::all();
         

        return view('front.layouts.app',$data);

    }

    // public function slider()
    // {
    //     // $slider=Slider::all();
    //     // return view('front.layouts.app',compact('slider'));
    // }
}
