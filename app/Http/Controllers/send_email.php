<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\send_email_class;
class send_email extends Controller
{

    public function send_email(){
        //create array 
        $data=request()->validate([
            't_name' =>'required',
            't_subject' =>'required',
            't_message' =>'required',
        ]);
        Mail::to('hananmohammed2468@gmail.com')->send(new send_email_class($data));
        return 'send email done';
    }
 }
