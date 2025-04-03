<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $data = $request->only('name', 'email', 'message');

        // Send email using Mailjet SMTP
        Mail::send([], [], function ($message) use ($data) {
            $message->to('sami.alnajadat@gmail.com')
                ->subject('Contact Us Form Submission')
                ->from($data['email'], $data['name'])
                ->text($data['message']);  // Use the `text` method for plain text emails
        });

        return redirect('contact')->with('success', 'Message sent successfully!');
    }
}
