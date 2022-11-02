<?php

namespace App\Http\Livewire;

use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class BookAppointment extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $success;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:20'
        ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function saveAppointment()
    {
        $validatedData = $this->validate();
        Mail::to('infoecos2@gmail.com')->send(
            new AppointmentMail($validatedData)
        );
        $this->reset(['name', 'email', 'phone', 'message']);
        $this->success = 'Appointment booked successfully!, You will hear from us soon';
    }
    public function render()
    {

        return view('livewire.book-appointment');
    }

}
