<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::all();
        return view('back.event.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.event.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion= new Event();
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
           $raise_price=$request->raise_price;
           $goal_price=$request->goal_price;

      }
      if(Event::create([
       'image' => $filename ,
       'title' => $title ,
       'description' => $description ,
       'raise_price' => $raise_price ,
       'goal_price' => $goal_price ,

   ]))
   
           return back()->with('event_success','Record saved successfully!');
       else
          return back()->withError('Record does not saved!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')
             ->with('event_delete','Record delete successfully.');
    }

    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }
}
