<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Gellary;

use Illuminate\Http\Request;
use Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['donations']=Donation::all();
        return view('back.donation.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery=Gellary::all();
         return view('front.pages.donation',compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if(Auth::check()){
            $promotion= new Donation();
            $this->validate_mage($request);
    
          if($request->file('image')){
              $file= $request->file('image');
              $filename= date('YmdHi').$file->getClientOriginalName();
               $destinationPath = 'public/images/'; //for local link will be
              $datetime = str_replace([' ', ':'], '-', date('mdYhisa', time()));
               $file->move($destinationPath, $filename);
              // $file-> move(public_path('public/images/homeslider'), $filename);
              // $data['image']= $filename;
               $name=$request->name;
               $email=$request->email;
               $amount=$request->amount;
               $user_id=Auth::user()->id;


          }
          if(Donation::create([
           'image' => $filename ,
           'name' => $name ,
           'email' => $email ,
           'amount' => $amount ,
           'user_id'=>$user_id,

    
       ]))
        // $donations->plan=$request->plan;
        // $donations->payment_type=$request->payment_type;
        // dd($donations);
        // $donations->save();
        return redirect()->back()->with('status','Successfully Submitted');
        }
        else{
             return redirect()->back()->with('status','Please  login First !');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();

        return redirect()->route('donations.index')
             ->withSuccess(__('Record delete successfully.'));
    }

    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }
}
