<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

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
        return $this->subject('New Message !!')
            ->view('emails.contact-mail');
    }
}
