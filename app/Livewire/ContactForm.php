<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // إنشاء هذا الميل لاحقًا

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

        // إرسال البريد
        Mail::to('saminjadat@gmail.com')->send(new ContactMail($this->name, $this->email, $this->phone, $this->message));

        $this->reset();

        session()->flash('success', 'Your message has been send successful');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
