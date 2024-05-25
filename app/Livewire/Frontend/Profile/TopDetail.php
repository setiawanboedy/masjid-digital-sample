<?php

namespace App\Livewire\Frontend\Profile;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TopDetail extends Component
{
    public function render()
    {
        $user = Auth::user();
        $firstLetter = Str::substr($user->name, 0, 1);
        $response = [
            'user' => $user,
            'firstLetter'=>$firstLetter,
        ];
        return view('livewire.frontend.profile.top-detail', $response);
    }
}
