<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

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
            Contact::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message,
            ]);

            $this->reset();

            session()->flash('success', 'Your message has been submitted successfully!');
        } catch (\Exception $e) {
            session()->flash('error', 'Error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
