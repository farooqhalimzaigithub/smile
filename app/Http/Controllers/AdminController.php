<?php

namespace App\Http\Controllers;

use App\Donations;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $donations=Donations::all();
        return view('back.layouts.master',compact('donations'));
    }

    public function approved($id)
    {

        $data=Donations::find($id);
        $data->status='Approved';
        $data->save();
        // if($data->status=="Done"){
        //  $data->orderBy('id','DESC')->get();
        // return redirect()->back();

        // }
        return redirect()->back();


        // $data = Donation::orderBy('id', 'DESC')->get();
    }
}
