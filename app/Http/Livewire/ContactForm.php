<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    public $username;
    public $email;
    public $password;

    public function submitForm(){
        
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
