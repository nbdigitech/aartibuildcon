<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lead;
use Session;

//e91e63
class SendSMSController extends Controller
{
    public function index(){
        $applyuser = Lead::orderBy('id','desc')->get();
        return view('Admin.SendSMS.Index',compact('applyuser'));
    }

     public function delete(request $request){
        Lead::where('id',$request->Delete)->delete();
        return redirect()->route('Admin/SendSMS');
    }

    public function editsession(request $request){
        Session::put('edit_id',$request->Edit);
        return redirect('Admin/SendSMS/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = Lead::where('id',$edit_id)->first();
        return view('Admin.SendSMS/Add',compact('edit'));
    }

    public function update(request $request){
        $mobile = $request->MobileNumber;
        $message = $request->Message;
            $authKey = "317345AHN7Xh0Ded5e3e95d4P1";
            $senderId = "KAUSHL";
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
        return redirect('Admin/SendSMS');
    }


}
