<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function store(Request $request) {
        $data = $request->validate([
            'fullname' => 'required|string',
            'email_address' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to(env('CONTACT_MAIL_DESTINATION'))->send(new ContactMail(
            $data['fullname'],
            $data['email_address'],
            $data['subject'],
            $data['message']
        ));

        return redirect()->back();
    }

}
