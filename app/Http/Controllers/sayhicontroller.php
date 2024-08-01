<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sayhi ;
// use App\Mail\MyTestMail ;
use Illuminate\Support\Facades\Validator;


class sayhicontroller extends Controller
{
    // 
    public function send(Request $r){
        $validator = Validator::make($r->all(), [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string','max:100'],
            'content' => ['required', 'string','max:2000'],

        ]
    );
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator);
    }else{
        Mail::to('RAJACLUBATHLETIC@rca.ma')->send(new Sayhi($r->name,$r->email,$r->subject,$r->content)); 
        return redirect()->back();
    }
    

       
    }

   
        
}
