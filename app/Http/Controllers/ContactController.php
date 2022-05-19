<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormPostRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactFormPostRequest $request)
    {
        Contact::create($request);

        //  Send mail to admin 
        Mail::send('email.contact', array(

            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'user_message' => $request['message'],

        ), function ($message) use ($request) {

            // $message->from($request->email);

            $message->to('axel.tahmid@gmail.com', 'Axel')->subject($request->get('subject'));
        });

        return response(['success' => 'Contact Form Submit Successfully']);
    }
}
