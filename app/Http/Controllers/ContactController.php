<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        // dd($input);

        Contact::create($input);

        //  Send mail to admin 

        Mail::send('contact-mail', array(

            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],

        ), function ($message) use ($request) {

            // $message->from($request->email);

            $message->to('axel.tahmid@gmail.com', 'Axel')->subject($request->get('subject'));
        });

        return response(['success' => 'Contact Form Submit Successfully']);
    }
}
