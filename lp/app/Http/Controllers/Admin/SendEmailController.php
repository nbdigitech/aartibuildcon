<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Session;
use Mail;

//e91e63
class SendEmailController extends Controller
{
    public function index(){
        $applyuser = Lead::orderBy('id','desc')->get();
        return view('Admin.SendEmail.Index',compact('applyuser'));
    }

     public function delete(request $request){
    	Lead::where('id',$request->Delete)->delete();
    	return redirect()->route('Admin/SendEmail');
    }

    public function editsession(request $request){
    	Session::put('edit_id',$request->Edit);
    	return redirect('Admin/SendEmail/Edit');
    }

    public function edit(request $request){
    	$edit_id = Session::get('edit_id');
    	$edit = Lead::where('id',$edit_id)->first();
    	return view('Admin.SendEmail/Add',compact('edit'));
    }

    public function update(request $request){
    	$data = array('Message'=>$request->Message, 'Name'=>$request->Names, 'Email'=>$request->Emaill,);

        Mail::send('Admin.mail.Add',$data,function($message) use($data){
            $message->to($data['Email'],$data['Name'])->subject('Reply From Aarti Group');
            $message->from('nbdigitaltechnology@gmail.com','Aarti Group');
        });
    	return redirect('Admin/SendEmail');
    }


}
