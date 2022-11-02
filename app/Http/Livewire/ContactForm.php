<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $success;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'min:10',
        'subject' => 'required|min:6',
        'message' => 'required|min:20'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveMessage()
    {
        $validatedData = $this->validate();
        Mail::to('infoecos2@gmail.com')->send(
            new ContactFormMail($validatedData)
        );
      $this->success = 'Your message has been sent successfully! You will hear from us soon.';
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
