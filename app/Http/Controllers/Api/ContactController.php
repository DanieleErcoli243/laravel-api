<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactMessageMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function message(Request $request)
    {

        $data = $request->all();
        
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

         if($validator->fails()){
            return response()->json(['errors' => $validator->errors()], 422);
         }

        $email = new ContactMessageMail($data['email'], $data['subject'], $data['message']);
        Mail::to(env('MAIL_TO_ADDRESS'))->send($email);
        return response(null, 204);
    }
}
