<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
class signup extends Controller
{
    public function signup( Request $req){
        //validation 
        $this->validate($req,[
         't_name'=>'required',
         't_pass'=>'required',
         't_email'=>'required',
         't_phone'=>'required',
         't_file'=>'required'
        ]);
        //this is the model that talk with DB to save in it 
        //encription 
        /*
                $enc_name=encrypt($req->input('t_name'));
        $enc_pass=encrypt($req->input('t_pass'));
        $enc_phone=encrypt($req->input('t_phone'));
         */
       

        $s=new supplier;
        $s->supplier_name=$req->input('t_name');
        $s->password=$req->input('t_pass');
        $s->email=$req->input('t_email');
        $s->phone=$req->input('t_phone');
        //->store('uploads','public') storeb  used to save files 
        $s->supplier_photo=$req->file('t_file')->store('uploads','public');
         $s->save();
         $req->session()->put('s_email',$req->input('t_email'));
         return redirect('setting');
    }
    public function login(Request $req){
        //select by email and password using and in where 
        $data = supplier::where([
                   ['email','=',$req->input('t_email')],
                   ['password','=',$req->input('t_pass')],
        ])->get();
        //then create the session 
        $req->session()->put('s_email',$req->input('t_email'));
        //then redirect to setting page
        return view('setting')->with('all_data',$data);
      }
    public function logout(Request $req){
        $req->session()->forget('s_email');
        return view('login_supplier');
    }
}

