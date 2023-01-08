<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Gellary;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Facade\Ignition\Tabs\Tab;
use App\Company_infos;
use  Mail;

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
        $data['gallery']=Gellary::all();
         $data['company']=Company_infos::all();
         return view('front.pages.donation',$data);
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


          $to_name = "farooq";
          $to_email = "farooqhalimzai24@gmail.com";
          $data = array('name'=>"Ogbonna Vitalis(farooq)", "body" => "A test mail");
          Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
          $message->to($to_email, $to_name)
          ->subject('Laravel Test Mail');
          $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
          });
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
    public function destroy($id)
    {
        $donation=Donation::find($id);
        if(!is_null($donation)){
            $donation->delete();
            return redirect()->back()->with('donation_delete','Record delete successfully');
        }
        return redirect()->back()->with('failer','Something went wrong');
    }



    

    public function validate_mage(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:jpeg,bmp,png,jpg|max:10000',
        ]);
    }

    public function approve()
    {
        $approved=Donation::orderBy('id','DESC')->where('status','=','Approved')->get();
        return view('back.donation.approved',compact('approved'));
    }

    public function approved(Request $request)
    {
        // dd($requst->all)
        $other=$request->input('name');

        $search=DB::table('donations')
            ->whereBetween('created_at',[$request->from_date,$request->to_date])
            ->where('name','LIKE','%' .$other.'%')
            ->where('status','=','Approved')
            ->orWhere('amount','=', $other)
            ->get();
            // dd($search);

        return view('back.donation.approved_result',compact('search'));
    }



    public function unapprove()
    {
        $unapproved=Donation::orderBy('id','DESC')->where('status','=','0')->get();
        return view('back.donation.unapproved',compact('unapproved'));
    }

    public function approve_result($id){
        $approved=Donation::find($id);
        $approved->status="0";
        $approved->save();
        return redirect()->back();
    }

    public function unapproved(Request $request)
    {

        $other=$request->input('name');

        $search=DB::table('donations')
            ->whereBetween('created_at',[$request->from_date,$request->to_date])
            ->where('name','LIKE','%' .$other.'%')
            ->where('status','=','0')
            ->orWhere('amount','=', $other)
            ->get();
 
        // dd($search);


        return view('back.donation.unapproved_result',compact('search'));
    }

    public function unapprove_result($id){
        $unapproved=Donation::find($id);
        $unapproved->status="Approved";
        $unapproved->save();
        return redirect()->back();
    }

    public function add()
    {
        return view('back.donation.create');
    }

    public function add_form(Request $request)
    {
        // $input = $request->all();
        // dd($request->all());

        if(Auth::check()){
                $name=$request->name;
               $email=$request->email;
               $amount=$request->amount;
               $plan=$request->plan;
               $payment_type=$request->payment_type;
               $user_id=Auth::user()->id;
               $filename=$request->image;





            $promotion= new Donation();
            $this->validate_mage($request);

            // $promotion->status="Approved";
            // $promotion->save();
            // dd($promotion);
    
          if($request->file('image')){
              $file= $request->file('image');
              $filename= date('YmdHi').$file->getClientOriginalName();
               $destinationPath = 'public/images/'; //for local link will be
              $datetime = str_replace([' ', ':'], '-', date('mdYhisa', time()));
               $file->move($destinationPath, $filename);
              // $file-> move(public_path('public/images/homeslider'), $filename);
              // $data['image']= $filename;

          }


          if(Donation::create([
           'image' => $filename ,
           'name' => $name ,
           'email' => $email ,
           'amount' => $amount ,
           'plan' => $plan,
           'payment_type' =>$payment_type ,
           'user_id'=>$user_id,
           'status'=>"Approved",



    
       ]))

            return redirect()->back()->with('donation_success','Successfully Submitted');
        }
        else{

         return redirect()->back()->with('donation_fail','Please  login First !');
        }

    }
    



}