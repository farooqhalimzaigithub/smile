<?php

namespace App\Http\Controllers\front;

use App\Gellary;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Plan;
use App\Company_infos;




class FrontController extends Controller
{
    public function app()
    {

        $data['slider']=Slider::all();
        $data['plans']=Plan::all();
         // dd($data['plans']);
        $data['gallery']=Gellary::latest()->take(6)->get();
        $data['company']=Company_infos::all();

         // dd($data['slider']);
        return view('front.layouts.app',$data);
    }
      public function donatepage()

    {
        $gallery=Gellary::all();

        return view('front.pages.donation',compact('gallery'));
    }
}
