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
        $slider=Slider::all();
        $gallery=Gellary::all();
        $plan=Plan::all();

        return view('front.layouts.app',compact('slider','gallery','plan'));
    }
      public function donatepage()

    {
        $gallery=Gellary::all();

        return view('front.pages.donation',compact('gallery'));
    }
}
