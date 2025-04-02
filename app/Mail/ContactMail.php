<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact US - ' . ($this->data['subject'] ?? 'No Subject'))
            ->view('emails.contact-mail')
            ->with([
                'name' => $this->data['name'] ?? 'Unknown',
                'email' => $this->data['email'] ?? 'No Email',
                'phone' => $this->data['phone'] ?? 'No Phone',
                'messageContent' => $this->data['message'] ?? 'No Message',
            ]);
    }
}
