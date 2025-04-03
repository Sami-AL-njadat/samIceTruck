<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;

class ContactMail extends Mailable
{
    public $name;
    public $email;
    public $phone;
    public $messageContent;

    public function __construct($name, $email, $phone, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        try {
            return $this->subject('New Message !!')
                ->view('emails.contact-mail')
                ->with([
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'messageContent' => $this->messageContent
                ]);
        } catch (\Exception $e) {
            Log::error('Failed to build email: ' . $e->getMessage());
            throw $e;  
        }
    }
}
