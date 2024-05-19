<?php

namespace App\Livewire\Frontend\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email_phone;
    public $password;

    public function rules()
    {
        return [
            'email_phone' => 'string',
            'password' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules());
    }

    public function login()
    {
        try {
            $field = filter_var($this->email_phone, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
    
            $user = User::where($field, $this->email_phone)->first();
    
            if ($user && Auth::attempt([$field => $this->email_phone, 'password' => $this->password])) {
                session()->regenerate();
                redirect('/');
            }else{
                $success = [
                    "title"=>"Berhasil",
                    "text"=>"Email atau password Anda salah!",
                    "icon"=>"error",
                ];
                $this->dispatch('refresh', data: $success);
            }
        } catch (\Exception $e) {
            $success = [
                "title"=>"Berhasil",
                "text"=>"Terjadi kesalahan pada server",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $success);
        }
    }

    public function render()
    {
        return view('livewire.frontend.auth.login');
    }
}
