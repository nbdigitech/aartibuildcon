<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class HomeController extends Controller
{
    public function index(){
    	return redirect('Admin/Lead');
    }
    
}
