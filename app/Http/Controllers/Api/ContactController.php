<?php

namespace App\Http\Controllers\Api;

use App\Mail\ContactMessageMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function message()
    {
        $email = new ContactMessageMail();
        Mail::to(env('MAIL_TO_ADDRESS'))->send($email);
        return response(null, 204);
    }
}
