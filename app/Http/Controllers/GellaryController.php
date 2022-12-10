<?php

namespace App\Http\Controllers;

use App\Gellary;
use Illuminate\Http\Request;

class GellaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gellary=Gellary::all();
        return view('back.gallery.index',compact('gellary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.gallery.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion= new Gellary();
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
      if(Gellary::create([
       'image' => $filename ,

   ]))
           return back()->withSuccess('Record saved successfully!');
       else
          return back()->withError('Record does not saved!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gellary  $gellary
     * @return \Illuminate\Http\Response
     */
    public function show(Gellary $gellary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gellary  $gellary
     * @return \Illuminate\Http\Response
     */
    public function edit(Gellary $gellary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gellary  $gellary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gellary $gellary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gellary  $gellary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gellary $gellary)
    {
        $gellary->delete();
// dd($gellary);
        return redirect()->route('gelleries.index')
             ->withSuccess(__('Record delete successfully.'));
    }

    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }
}
