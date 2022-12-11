<?php

namespace App\Http\Controllers\front;

use App\Gellary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Plan;



class FrontController extends Controller
{
    public function app()
    {

        $data['slider']=Slider::all();
        $data['plans']=Plan::all();
        // dd($slider);
        $data['gallery']=Gellary::latest()->take(6)->get();
        // dd($data['gallery']);
        return view('front.layouts.app',$data);
    }
      public function donatepage()

    {
        $gallery=Gellary::all();

        return view('front.pages.donation',compact('gallery'));
    }
}
