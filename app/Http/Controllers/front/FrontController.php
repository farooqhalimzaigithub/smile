<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function app()
    {
        return view('front.layouts.app');
    }
      public function donatepage()
    {
        return view('front.pages.donation');
    }
}
