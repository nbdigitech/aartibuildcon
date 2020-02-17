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

class LeadController extends Controller{
    public function store(request $request){
      
             $check = Lead::where('Email',$request->Email)->orWhere('Mobile',$request->Mobile)->count();
        if($check==0){
        $user = new Lead();
        $user->Name = $request->Name;
        $user->Email = $request->Email;
        $user->Mobile = $request->Mobile;
        $user->Budget = $request->Budget;
        $user->save();
        $mess = "Lead From Website - %0a Name :- $request->Name %0a Email :- $request->Email %0a Mobile : $request->Mobile %0a Budget : $request->Budget";
          $authKey = "317345AHN7Xh0Ded5e3e95d4P1";
          $mobileNumber = $request->Mobile;
          $senderId = "KAUSHL";
          $route = "4";
          $postData = array(
            'authkey' => $authKey,
            'mobiles' => 8085264230,
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
        $data = array('Name'=>$request->Name, 'Email'=>$request->Email, 'Mobile'=>$request->Mobile, 'Budget'=>$request->Budget);
        // Mail::send('mail.owner',$data,function($message) use ($data){
        //      $message->to('nbdigitaltechnology@gmail.com','Aarti Group')->subject('Website Lead');
        //     $message->from('nbdigitaltechnology@gmail.com','Aarti Group');
        // });
        
       
        // Mail::send('mail.user',$data,function($message) use ($data){
        //      $message->to($data['Email'],$data['Name'])->subject('Kaushalya Academy');
        //      $message->from('nbdigitaltechnology@gmail.com','Aarti Group');
        // });
        $messs = " Thank you for submitting the form. We will get in touch with you soon!";
         $postData = array(
            'authkey' => $authKey,
            'mobiles' => $request->Mobile,
            'message' => $messs,
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
        
        $request->session()->flash('success','You Have Registered Successfully!');
        return redirect('thankyou.html');

        }
        else{
        return redirect('thankyou.html');
        }
        
    }
    
        public function lead(request $request){
            return view('Index');
        }

        public function thankyou(request $request){
            return view('Thankyou');
        }

}
