<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{

    use WithFileUploads;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $title;

    public $date;
    public $time;

    #[Validate('required')]
    public $category;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $image;

    #[Validate('required', message: 'Tidak boleh kosong', onUpdate: false)]
    public $description;



    public function store()
    {
        try {
            $input = $this->validate();
            $dateTime = Carbon::createFromFormat('Y-m-d H:i', "{$this->date} {$this->time}");
            $ran = Str::random(5);
            $data['slug'] = str::slug($this->title).'-'.$ran;
            $input['dtm'] = $dateTime;
            $input['user_id'] = Auth::user()->id;
            $input['image'] = $this->image->store('posters', 'public');
            Event::create($input);

            session()->flash('success', 'Data berhasil disimpan.');
            $this->resetForm();
            return redirect()->route('admin.event.index');
        } catch (\Exception $e) {
            session()->flash('error', 'Data gagal disimpan.');
        }
    }

    private function resetForm()
    {
        $this->title = null;
        $this->date = null;
        $this->category = null;
        $this->image = null;
        $this->description = null;
    }

    public function render()
    {
        return view('livewire.admin.event.create-event');
    }
}
