<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

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
