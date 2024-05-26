<?php

namespace App\Livewire\Frontend;

use App\Helper\ConstData;
use App\Mail\TicketEmail;
use App\Models\Transaction as ModelsTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class Transaction extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $filterBy;

    public function mount(){
        $this->filterBy = ConstData::ALL;
    }

    public function sendEmail(){
        $data = [];
        Mail::to("admin@admin.com")->send(new TicketEmail($data));
    }

    public function render()
    {
        $userId = Auth::user()->id;
        if ($this->filterBy == ConstData::ALL) {
            $transactions = ModelsTransaction::where('user_id',$userId)->paginate($this->perPage);
        } else {
            $transactions = ModelsTransaction::where('user_id',$userId)->where('status', $this->filterBy)->get();
        }

        $response = [
            'transactions'=>$transactions
        ];
        return view('livewire.frontend.transaction', $response);
    }
}
