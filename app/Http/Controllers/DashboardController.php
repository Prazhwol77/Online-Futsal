<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Futsal;
class DashboardController extends Controller
{
    public function index()
    {
    	if (Auth::user()->hasRole('user')) {
    		return redirect('/dashboard/userdashboard');
    	}elseif (Auth::user()->hasRole('Futsal')) {
    		return redirect('/futsaluser');
    	}
    	elseif (Auth::user()->hasRole('Admin')) {
    		return redirect('/viewdatadashboard');
    	}
    }
    //for edit 
    //public function edit(user $id){
      //  return view('Edit', ['user' => $id]);
    //}

    //public function store()

    //admin
    public function addfutsal(){
        $data=Futsal::all();
        return view('addfutsal',['collection'=>$data]);

    }
    public function futsal(){
        $futsal=Role::find(2)->users()->get();
        return view('userdashboard' ,['post'=>$futsal]);        
    }
    public function user(){
        //$user = DB::select('select * from users');
        $user = Role::find(3)->users()->get();
        return view('user',['posts'=>$user]);
    }
    //user
    public function myprofile(){
        return view('myprofile');
    }










}
