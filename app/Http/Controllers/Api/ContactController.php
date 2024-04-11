<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactMessageMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function message(Request $request)
    {

        $data = $request->all();
        return response()->json($request);

        $email = new ContactMessageMail($data['sender'], $data['subject'], $data['message']);
        Mail::to(env('MAIL_TO_ADDRESS'))->send($email);
        return response(null, 204);
    }
}
