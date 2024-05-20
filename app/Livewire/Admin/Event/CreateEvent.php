<?php

namespace App\Livewire\Admin\Event;

use App\Models\Category;
use App\Models\Event;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{

    use WithFileUploads;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $title;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $date;

    public $category_id;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $image;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $description;



    public function store()
    {
        try {
            $input = $this->validate();
            $input['dtm'] = Date::now();
            $input['user_id'] = Auth::user()->id;
            $input['image'] = $this->image->store('posters', 'public');
            $category = Category::create([
                'text'=>'Web Series',
                'category'=>'SERIES',
            ]);
            $input['category_id'] = $category->id;
            Event::create($input);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.event.create-event');
    }
}
