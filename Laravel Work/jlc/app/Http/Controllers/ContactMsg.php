<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMsg extends Controller
{
    public function cmsg()
    {
        return view('contact');
    }

    public function csbmt(Request $request)
    {
        Mail::send('emails.contactmail',[
            'cntct_name' => $request->cntct_name,
            'cntct_email' => $request->cntct_email,
            'cntct_sub' => $request->cntct_sub,
            'cntct_message' => $request->cntct_message
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'), $request->cntct_name);
            $mail->to('joblinkcorporate.c@gmail.com')->subject('Contact Us Message');
        });
        return view('contact_success');
    }
}
