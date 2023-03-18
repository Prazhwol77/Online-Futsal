<?php

namespace App\Http\Controllers;

use App\Models\Futsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FutsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Futsal::all();
       
        return view('dashboard',['data'=>$data]);
    }

    public function futsalAdd(){
        $data=DB::table('role_user')->join('users','users.id','=','role_user.user_id')->where('role_user.role_id',2)->get();

        return view('FutsalManagerAdd', ['data'=>$data]);
    }
    public function viewbookfutsal(){
        $auth=auth()->user()->id;
    $data=DB::table('bookings')->join('futsals','futsals.id','=','bookings.futsal_id')->join('users','users.id','=','bookings.user_id')->where('futsals.user_id',$auth)->get();
    return view('bookingfutsalview',['post'=>$data]);

    }

    public function getallfutsal(){
        $data=Futsal::all();
        return view('futaldetails',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=auth()->user()->id;
        $data=Futsal::where('user_id',$user)->get();
        return view('futsaldashboard',['data'=>$data]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=auth()->user()->id;
       $request->validate([
        "FutsalName"=>"required",
        "address"=>"required",
        "City"=>"required",
        "State"=>"required",
        "PhoneNumber"=>"required",
        "ZipCode"=>"required",
        "description"=>"required",
        "price"=>"required",
        "image1"=>"image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        "image2"=>"image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        "image3"=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        "image4"=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
       ]);
       $data=new Futsal();
       $data->user_id=$request->futsalnew_id;
       $data->address=$request->address;
       $data->FutsalName=$request->FutsalName;
       $data->City=$request->City;
       $data->State=$request->State;
       $data->PhoneNumber=$request->PhoneNumber;
       $data->ZipCode=$request->ZipCode;
       $data->description=$request->description;
       $data->price=$request->price;
       if(isset($request->image1)){
           $image1 = time() .'.image1'. $request->image1->extension();
           $request->image1->move(public_path('images'), $image1);
           $data->image1=$image1;
          }
          if(isset($request->image2)){
           $image2 = time() .'.image2'. $request->image2->extension();
           $request->image2->move(public_path('images'), $image2);
           $data->image2=$image2;
          }
          if(isset($request->image3)){
           $image3 = time() .'.image3'. $request->image3->extension();
           $request->image3->move(public_path('images'), $image3);
           $data->image3=$image3;
          }
          if(isset($request->image4)){
           $image4 = time() .'.image4'. $request->image4->extension();
           $request->image4->move(public_path('images'), $image4);
           $data->image4=$image4;
          }
       $data->save();
       if($data){
        return redirect('/dashboard')->with('success','New Futsal Added');
       }else{
        return back();
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show(Futsal $futsal)
    {
        //
    }
    function fetchfutsal($id){
        $getadat=Futsal::find($id);
        return view('FutsalDetails',['posts'=>$getadat]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Futsal::find($id);
        return view('editfutsal',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //$user=auth()->user()->id;
        $request->validate([
         "FutsalName"=>"required",
         "address"=>"required",
         "City"=>"required",
         "State"=>"required",
         "PhoneNumber"=>"required",
         "ZipCode"=>"required",
         "description"=>"required",
         "price"=>"required",
         "image1"=>"image|mimes:jpg,png,jpeg,gif,svg|max:2048",
         "image2"=>"image|mimes:jpg,png,jpeg,gif,svg|max:2048",
         "image3"=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
         "image4"=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $data=Futsal::find($id);
        $data->address=$request->address;
        $data->FutsalName=$request->FutsalName;
        $data->City=$request->City;
        $data->State=$request->State;
        $data->PhoneNumber=$request->PhoneNumber;
        $data->ZipCode=$request->ZipCode;
        $data->description=$request->description;
        $data->price=$request->price;
        if(isset($request->image1)){
           $image1 = time() .'.image1'. $request->image1->extension();
           $request->image1->move(public_path('images'), $image1);
           $data->image1=$image1;
          }
          if(isset($request->image2)){
           $image2 = time() .'.image2'. $request->image2->extension();
           $request->image2->move(public_path('images'), $image2);
           $data->image2=$image2;
          }
          if(isset($request->image3)){
           $image3 = time() .'.image3'. $request->image3->extension();
           $request->image3->move(public_path('images'), $image3);
           $data->image3=$image3;
          }
          if(isset($request->image4)){
           $image4 = time() .'.image4'. $request->image4->extension();
           $request->image4->move(public_path('images'), $image4);
           $data->image4=$image4;
          }
        $data->save();
        if($data){
         return redirect('/dashboard')->with('success','New Futsal Updated');
        }else{
         return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Futsal::find($id);
        $data->delete();
        if($data){
            return back()->with('success','Data deleted Successful');
        }
    }
}
