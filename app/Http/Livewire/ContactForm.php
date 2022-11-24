<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    public $username;
    public $email;
    public $password;

    public $message;

    protected $rules = [
        'username' => 'required',
        'email' => 'required',
        'password' => 'required:min|4',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {

        $data = $this->validate();

        $this->resetForm();

        $this->message = "succesful form sent";
    }

    public function resetForm()
    {
        $this->username = "";
        $this->email = "";
        $this->password = "";
    }

    public function closeMessage()
    {
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
