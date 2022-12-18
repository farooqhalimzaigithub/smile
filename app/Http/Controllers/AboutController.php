<?php

namespace App\Http\Controllers;

use App\Abouts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts=Abouts::all();
        return view('back.about.index',compact('abouts'));
    }
    public function create()
    {
        return view('back.about.create');
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $promotion= new Abouts();
            $this->validate_mage($request);
    
          if($request->file('image')){
              $file= $request->file('image');
              $filename= date('YmdHi').$file->getClientOriginalName();
               $destinationPath = 'public/images/'; //for local link will be
              $datetime = str_replace([' ', ':'], '-', date('mdYhisa', time()));
               $file->move($destinationPath, $filename);
              // $file-> move(public_path('public/images/homeslider'), $filename);
              // $data['image']= $filename;
               $title=$request->title;
               $heading=$request->heading;
               $about_text=$request->about_text;



            //    $user_id=Auth::user()->id;


          }
          if(Abouts::create([
           'image' => $filename ,
           'title' => $title ,
           'heading' => $heading ,
           'about_text' => $about_text ,


       ]))

         return redirect()->back()->with('status','Successfully Submitted');
        }
         else{
             return redirect()->back()->with('status','Please  login First !');
        }
    }
    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }

    public function destroy($id)
    {
        $companies=Abouts::find($id);
        if(!is_null($companies)){
            $companies->delete();
            return redirect()->back()->with('successer','Record delete successfully');
        }
        return redirect()->back()->with('failer','Something went wrong');
    
    }

}
