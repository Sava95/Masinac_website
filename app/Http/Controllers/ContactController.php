<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class ContactController extends Controller
{
    public function send_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|email',
            'country' => 'required|min:3',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            // Validation check 
            $message_sent = False;

            return response()->json([$message_sent, $validator->errors()]);

        } else{ 
            // Send Email
            Mail::send('email.contactmail', [
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'phone' => $request->phone,
                'msg' => $request->message,
            ], 

            function($mail) use($request) {
                $mail->from(env('MAIL_FROM_ADDRESS', $request->email));
                $mail->to('office@masinacserbia.rs')->subject('Contact Us Mail');
            });

            $message_sent = True;
            
            return response()->json($message_sent);
        }
    }
}
