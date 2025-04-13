<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;

class ContactForm extends Component
{
    public $name, $email, $phone, $message, $recaptchaToken;

     protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|min:10',
        'phone' => 'required|numeric|digits:10',
        'recaptchaToken' => 'required',

    ];

    public function submitForm()
    {

        $this->validate();

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $this->recaptchaToken,
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false)) {
            session()->flash('error', 'reCAPTCHA verification failed. Please try again.');
            return;
        }


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
