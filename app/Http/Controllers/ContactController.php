<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact');
    }

    /**
     * Validate Form
     */
    public function postForm(ContactRequest $request)
    {
        Mail::send('email_contact', $request->all(), function($message)
        {
            $message->to('test@test.fr')->subject('Contact');
        });

        return view('confirm');
    }
}
