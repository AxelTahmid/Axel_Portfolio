<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormPostRequest;
use App\Models\EmailContact;
use Illuminate\Support\Facades\Mail;

class EmailContactController extends Controller
{
    public function __invoke(ContactFormPostRequest $request)
    {
        $form_data = $request->validated();

        EmailContact::create($form_data);

        //  Send mail to admin 

        Mail::send('email.contact', array(

            'name' => $form_data['name'],
            'email' => $form_data['email'],
            'subject' => $form_data['subject'],
            'user_message' => $form_data['message'],

        ), function ($message) use ($form_data) {

            // $message->from($request->email);

            $message->to('axel.tahmid@gmail.com', 'Axel')->subject($form_data['subject']);
        });

        return response(['success' => 'Contact Form Submit Successfully']);
    }
}
