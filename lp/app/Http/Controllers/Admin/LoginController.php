<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;

class LoginController extends Controller
{
    public function index(){
    	if(Auth::user()==''){
    	return view('Admin.Login');
    }
    else{
    	return redirect('/Admin');
    }
    }

    public function attempt(request $request){
    	if(Auth::attempt(['email'=>$request->Email, 'password'=>$request->Password])){
    		return redirect('/Admin');
    	}
    	else{
    		$request->session()->flash('error','Invalid UserName or Password');
    		return redirect()->route('Admin/Login');
    	}
    }


    }

