<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['plans']=Plan::all();
        return view('back.plan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('back.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $promotion= new Plan();
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
        if(Plan::create([
         'image' => $filename ,
         'title' => $title ,
         'description' => $description ,

     ]))
             return back()->with('plan_success','Record saved successfully!');
         else
            return back()->withError('plan_fail','Record does not saved!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')
             ->with('plan_delete','Record delete successfully.');
    }

    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }
}
