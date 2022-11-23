<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    public $username;
    public $email;
    public $password;

    public function submitForm(){

        $this->resetForm();

        session()->flash('success_message','the form was sent!');
    }

    public function resetForm(){
        $this->username = "";
        $this->email = "";
        $this->password = "";
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
