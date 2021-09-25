<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $details = [
            'subject' => $request->subject,
            'message' => $request->message
        ];
        
        Mail::to('ebutify@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent','Your message has been sent successfully!');
    }
}
