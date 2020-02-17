<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FacebookLead;
use Session;

//e91e63
class FacebookLeadController extends Controller
{
    public function index(){
        $applyuser = FacebookLead::orderBy('id','desc')->get();
        return view('Admin.FacebookLead.Index',compact('applyuser'));
    }

    public function store(request $request){
        $data = new FacebookLead;
        $data->Name = $request->Name;
        $data->Email = $request->Email;
        $data->Mobile = $request->Mobile;
        $data->Source = $request->Source;
        $data->Interested = $request->Interested;
        $data->SiteVisitDate = $request->SiteVisitDate;
        $data->Remark = $request->Remark;
        $data->Date = $request->Date;
        $data->save();
        $request->session()->flash('success','Submited Successfull!');
        return redirect('Admin/FacebookLead');
        
    }
    
    public function create(request $request){
        return view('Admin.FacebookLead.Add');
    }
    
     public function delete(request $request){
    	FacebookLead::where('id',$request->Delete)->delete();
    	return redirect()->route('Admin/FacebookLead');
    }

    public function editsession(request $request){
    	Session::put('edit_id',$request->Edit);
    	return redirect('Admin/FacebookLead/Edit');
    }
    
    public function editsmssession(request $request){
    	Session::put('sms_id',$request->Edit);
    	return redirect('Admin/FacebookLead/EditSMS');
    }
    
    public function editmailsession(request $request){
    	Session::put('mail_id',$request->Edit);
    	return redirect('Admin/FacebookLead/EditMail');
    }
    
    public function editmail(request $request){
        $edit_id = Session::get('mail_id');
    	$edit = FacebookLead::where('id',$edit_id)->first();
    	return view('Admin.FacebookLead/Add',compact('edit'));
    }
    
    public function editsms(request $request){
        $edit_id = Session::get('sms_id');
    	$edit = FacebookLead::where('id',$edit_id)->first();
    	return view('Admin.FacebookLead/SMS',compact('edit'));
    }

    public function edit(request $request){
    	$edit_id = Session::get('edit_id');
    	$edit = FacebookLead::where('id',$edit_id)->first();
    	return view('Admin.FacebookLead/SMS',compact('edit'));
    }

    public function update(request $request){
    	$data = FacebookLead::where('id',$request->Update)->first();
    	 $data->Name = $request->Name;
        $data->Email = $request->Email;
        $data->Mobile = $request->Mobile;
        $data->Source = $request->Source;
        $data->Interested = $request->Interested;
        $data->SiteVisitDate = $request->SiteVisitDate;
        $data->Remark = $request->Remark;
        $data->Date = $request->Date;
    	$data->save();
    	return redirect('Admin/FacebookLead');
    }
    
    public function sendemail(request $request){
        $data = array('Message'=>$request->Message, 'Name'=>$request->Names, 'Email'=>$request->EmailN,);
        Mail::send('Admin.FacebookLead.SendMail',$data,function($message) use($data){
            $message->to($data['Email'],$data['Name'])->subject('Reply From Sarthak Builders');
            $message->from('kunal1071996@gmail.com','Sarthak Builders');
        });
    	return redirect('Admin/FacebookLead');
    }
    
    public function sendsms(request $request){
        $mobile = $request->MobileNumber;
        $message = $request->Message;
            $authKey = "240400A6FSTpzE2d5d4d59b5";
            $senderId = "SRTHAK";
            $route = "4";
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $mobile,
                'message' => $message,
                'sender' => $senderId,
                'route' => $route,
                'country'=>'0'
        );  
             $url="https://control.msg91.com/api/sendhttp.php";
            $ch = curl_init();
                curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);
            
             if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            else{
                    curl_close($ch);    
            }
        $request->session()->flash('success','Message Send !');
        return redirect('Admin/FacebookLead');
    }


}
