<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;

class ContactForm extends Component
{
    public $name, $email, $phone, $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|min:10',
        'phone' => 'required|numeric|digits:10',
    ];

    public function submitForm()
    {
        $this->validate();

        try {
            // Attempt to send email
            Mail::to('samicecream52@gmail.com')->send(new ContactMail(
                $this->name,
                $this->email,
                $this->phone,
                $this->message
            ));

            $this->reset();
            session()->flash('success', 'Your message has been sent successfully!');
        } catch (\Swift_TransportException $e) {
            // SMTP specific errors
            Log::error('SMTP Error: ' . $e->getMessage());
            session()->flash('error', 'Failed to send message. Please try again later or contact us directly.');
        } catch (\Exception $e) {
            // General errors
            Log::error('Email Error: ' . $e->getMessage());
            session()->flash('error', 'An unexpected error occurred. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
