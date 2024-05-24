<?php

namespace App\Livewire\Frontend;

use App\Models\Transaction as ModelsTransaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Transaction extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $filterBy;

    public function mount(){
        $this->filterBy = 'ALL';
    }

    public function render()
    {
        $userId = Auth::user()->id;
        if ($this->filterBy == 'ALL') {
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
