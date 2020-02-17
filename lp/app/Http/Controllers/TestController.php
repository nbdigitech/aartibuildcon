<?php

namespace App\Http\Controllers;
use Session;
use App\User;
use App\Lead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Auth;
use Mail;

class TestController extends Controller{
    public function store(request $request){
        $third = $request->first + $request->second;
        if($request->third==$third){
             $check = Lead::where('Email',$request->Email)->orWhere('Email',$request->Mobile)->count();
        if($check==0){
        $user = new Lead();
        $user->Name = $request->Name;
        $user->Email = $request->Email;
        $user->Mobile = $request->Mobile;
        $user->Course = $request->Course;
        $user->save();
        $mess = "Lead From Website - %0a Name :- $request->Name %0a Email :- $request->Email %0a Mobile : $request->Mobile %0a Course : $request->Course";
          $authKey = "317345AHN7Xh0Ded5e3e95d4P1";
          $mobileNumber = $request->Mobile;
          $senderId = "KAUSHL";
          $route = "4";
          $postData = array(
            'authkey' => $authKey,
            'mobiles' => 7529060606,
            'message' => $mess,
            'sender' => $senderId,
            'route' => $route
          );
          $url="http://api.msg91.com/api/sendhttp.php";
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
        curl_close($ch);
        $data = array('Name'=>$request->Name, 'Email'=>$request->Email, 'Mobile'=>$request->Mobile, 'Course'=>$request->Course);
        Mail::send('mail.owner',$data,function($message) use ($data){
             $message->to('kaushalyaacademyraipur@gmail.com','Kaushalya Academy')->subject('Website Lead');
            $message->from('kaushalyaacademyraipur@gmail.com','Kaushalya Academy');
        });
        
       
        Mail::send('mail.user',$data,function($message) use ($data){
             $message->to($data['Email'],$data['Name'])->subject('Kaushalya Academy');
             $message->from('kaushalyaacademyraipur@gmail.com','Kaushalya Academy');
        });
        
        $request->session()->flash('success','You Have Registered Successfully!');
        return redirect('https://kaushalyaacademy.in/freedemoclass/thankyou.html');

        }
        else{
        return redirect('https://kaushalyaacademy.in/freedemoclass/thankyou.html');
        }
        }
        else{
            $request->session()->flash('error',"Your Answer is Incorrect");
           return redirect('https://kaushalyaacademy.in/freedemoclass/index.php');
        }
       
    }

}
