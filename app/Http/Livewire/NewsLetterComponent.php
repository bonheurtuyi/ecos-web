<?php

namespace App\Http\Livewire;

use App\Mail\NewsLetterMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class NewsLetterComponent extends Component
{
    public $email;
    public $success;
    protected $rules = [
        'email' => 'required|email',
    ];
    protected $messages = [
        'email.required' => 'Email is required.',
        'email.email' => 'Provide valid email.',
    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveNewsLetter()
    {
        $validatedData = $this->validate();
        Mail::to('infoecos2@gmail.com')->send(
            new NewsLetterMail($validatedData)
        );
        $this->success = 'Congratulations, Your email saved successfully!';
    }

    public function render()
    {
        return view('livewire.news-letter-component');
    }
}
