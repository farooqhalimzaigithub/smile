<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $slider=Slider::all();
       return view('back.slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion= new Slider();
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
             $description=$request->description;
        }
        if(Slider::create([
         'image' => $filename ,
         'title' => $title ,
         'description' => $description ,

     ]))
             return back()->with('slider_success','Record saved successfully!');
         else
            return back()->with('fail','Record does not saved!'); 

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')
             ->with('slider_delete','Record delete successfully.');
    }

    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }
}
