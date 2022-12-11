<?php

namespace App\Http\Controllers;

use App\Donations as AppDonations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Donations;
use App\Event;

class htmlcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function homepage()
    {
        return view('user-panel.partials.home');
    }

    public function aboutpage()
    {
        return view('front.pages.about');
    }

     public function educationpage()
    {
        return view('front.pages.education');
    }

     public function educationdetailpage()
    {
        return view('front.pages.educationdetail');
    }

      public function medicalpage()
    {
        return view('front.pages.medical');
    }

     public function medicaldetailpage()
    {
        return view('front.pages.medicaldetail');
    }

     public function povertypage()
    {
        return view('front.pages.poverty');
    }

     public function povertydetailpage()
    {
        return view('front.pages.povertydetail');
    }

     public function upcomingeventpage()
    {
        $event=Event::all();
        return view('front.pages.upcomingevent',compact('event'));
    }

    public function upcomingeventdetailpage()
    {
        return view('front.pages.upcomingeventdetail');
    }

       public function completedeventpage()
    {
        $event=Event::all();

        return view('front.pages.completedevent',compact('event'));
    }

    public function completedeventdetailpage()
    {
        return view('front.pages.completedeventdetail');
    }

     public function blogpage()
    {
        return view('user-panel.partials.blog');
    }

     public function blogdetailpage()
    {
        return view('user-panel.partials.blogdetail');
    }

     public function successstoriespage()
    {
        return view('user-panel.partials.successstories');
    }

     public function successstoriesdetailpage()
    {
        return view('user-panel.partials.successstoriesdetail');
    }

     public function registerpage()
    {
        return view('user-panel.partials.register');
    }

     public function loginpage()
    {
        return view('user-panel.partials.login');
    }

     public function contactpage()
    {
        return view('front.pages.contact');
    }

     public function termpage()
    {
        return view('user-panel.partials.termofuse');
    }

    public function privacypage()
    {
        return view('user-panel.partials.privacy&policy');
    }

      public function donatepage()
    {
        return view('user-panel.partials.donate');
    }

    public function donate(Request $request)
    {
        $donations=new Donations();
        $donations->name=$request->name;
        $donations->email=$request->email;
        $donations->amount=$request->amount;
        $donations->save();
        return redirect()->back()->with('status','Successfully Submitted');
        
    }


     public function faqspage()
    {
        return view('user-panel.partials.faqs');
    }

       public function readmorepage()
    {
        return view('user-panel.partials.readmore');
    }

     /* public function volunteerpage()
    {
        return view('home.volunteer');
    }*/

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
