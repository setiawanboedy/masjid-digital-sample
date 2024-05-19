<?php

namespace App\Livewire\Frontend\Auth;

use App\Jobs\DelayJob;
use Livewire\Component;
use Illuminate\Validation\Rules\Password;

class Register extends Component
{
    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;


    public function rules()
    {
        return [
            'name' => 'string',
            'email' => 'email',
            'phone' => 'numeric',
            'password' => [
                Password::default()
            ],
            'password_confirmation' => ['same:password'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules());
    }

    
    public function render()
    {
        return view('livewire.frontend.auth.register');
    }
}
