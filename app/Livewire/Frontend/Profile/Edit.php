<?php

namespace App\Livewire\Frontend\Profile;

use App\Jobs\DelayJob;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Edit extends Component
{
    public $userId;
    public $name;
    public $email;
    public $phone;
    public $address;

    public $password;
    public $password_new;
    public $password_confirmation;

    public function rules()
    {
        return [
            'name' => 'string',
            'email' => 'email',
            'phone' => 'numeric',
            'address' => 'string',
        ];
    }

    public function pwRules()
    {
        return [
            'password' => [
                Password::default()
            ],
            'password_new' => [
                Password::default()
            ],
            'password_confirmation' => ['same:password_new'],
        ];
    }


    public function mount()
    {
        $user = Auth::user();
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->address = $user->address;
    }

    public function update()
    {
        try {
            $validated = $this->validate($this->rules());
            $user = User::find($this->userId);
            $user->fill($validated);
            $user->save();
            $success = [
                "title"=>"Berhasil Update",
                "text"=>"Data profil berhasil diperbaharui!",
                "icon"=>"success",
            ];
            $this->dispatch('refresh', data: $success);
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal Update",
                "text"=>"Terjadi kesalahan saat perbaharui data",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }

    public function changePw()
    {
        $validated = $this->validate($this->pwRules());
        try {
            if (Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password])) {
                $user = User::find($this->userId);
                $validated['password'] = Hash::make($this->password_new);
                $user->fill($validated);
                $user->save();
                toastify()->success('Password berhasil diperbaharui!');
                session()->regenerate();
                redirect()->route('login.index');
            }else {
                $error = [
                    "title"=>"Gagal Ubah Password",
                    "text"=>"Gunakan password saat ini",
                    "icon"=>"error",
                ];
                $this->dispatch('refresh', data: $error);
            }
            
        } catch (\Exception $e) {
            $error = [
                "title"=>"Gagal Ubah Password",
                "text"=>"Terjadi kesalahan saat ubah password",
                "icon"=>"error",
            ];
            $this->dispatch('refresh', data: $error);
        }
    }

    public function render()
    {
        return view('livewire.frontend.profile.edit');
    }
}
