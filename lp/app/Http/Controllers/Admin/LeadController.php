<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Session;

//e91e63
class LeadController extends Controller
{
    public function index(){
        $applyuser = Lead::orderBy('id','desc')->get();
        return view('Admin.Lead.Index',compact('applyuser'));
    }

     public function delete(request $request){
    	Lead::where('id',$request->Delete)->delete();
    	return redirect()->route('Admin/Lead');
    }

    public function editsession(request $request){
    	Session::put('edit_id',$request->Edit);
    	return redirect('Admin/Lead/Edit');
    }

    public function edit(request $request){
    	$edit_id = Session::get('edit_id');
    	$edit = Lead::where('id',$edit_id)->first();
    	return view('Admin.Lead/Add',compact('edit'));
    }

    public function update(request $request){
    	$update = Lead::where('id',$request->Update)->first();
    	$update->Remark = $request->Remark;
    	$update->save();
    	return redirect('Admin/Lead');
    }


}
