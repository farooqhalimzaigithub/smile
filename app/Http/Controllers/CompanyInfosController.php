<?php

namespace App\Http\Controllers;

use App\Company_infos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class CompanyInfosController extends Controller
{

    public function index()
    {
        $companies=Company_infos::all();
        return view('back.company_info.index',compact('companies'));
    }



    

    public function create()
    {
        return view('back.company_info.create');
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $promotion= new Company_infos();
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
               $email=$request->email;
               $contact=$request->contact;
               $address=$request->address;
               $about_company=$request->about_company;

            //    $user_id=Auth::user()->id;


          }
          if(Company_infos::create([
           'image' => $filename ,
           'title' => $title ,
           'email' => $email ,
           'contact' => $contact ,
           'address'=>$address,
           'about_company'=>$about_company,

       ]))

         return redirect()->back()->with('company_success','Successfully Submitted');
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
        $companies=Company_infos::find($id);
        if(!is_null($companies)){
            $companies->delete();
            return redirect()->back()->with('company_delete','Record delete successfully');
        }
        return redirect()->back()->with('failer','Something went wrong');
    
    }

    public function edit($id)
    {
        $company=Company_infos::find($id);
        return view('back.company_info.edit',compact('company'));
    }

    public function update($id,Request $request)
    {
        
        $company=Company_infos::find($id);
        $company->title=$request->title;
        $company->email=$request->email;
        $company->contact=$request->contact;
        $company->address=$request->address;
        $company->about_company=$request->about_company;
        $request->image;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
             $destinationPath = 'public/images/'; //for local link will be
            $datetime = str_replace([' ', ':'], '-', date('mdYhisa', time()));
             $file->move($destinationPath, $filename);
            $company->image=$filename;

        }
    
        $result=$company->save();
    
        if($result){
            return redirect('company')->with('company_edit','Data has been updated successfully');
    
        }
        else{
            return redirect()->back()->with('fail','Something went wrong');
        }
    

    }
}
