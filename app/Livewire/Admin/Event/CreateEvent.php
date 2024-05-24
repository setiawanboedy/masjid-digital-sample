<?php

namespace App\Livewire\Admin\Event;

use App\Helper\ConstData;
use App\Models\Event;
use App\Models\Series;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{

    use WithFileUploads;

    #[Validate('required', message: 'Tidak boleh kosong')]
    public $title;

    public $date;
    public $time;

    #[Validate('required')]
    public $category;

    #[Validate('required', message: 'Tidak boleh kosong')]
    public $image;

    #[Validate('required', message: 'Tidak boleh kosong')]
    public $description;
    
    public $videos = [];

    protected $rules = [
        'videos.*.video_url' => 'required|url',
        'videos.*.title' => 'required|string',
        'videos.*.is_unlock' => 'required|boolean'
    ];
    
    
    public function mount()
    {
        $this->videos = session()->get('videos', []);

        if (empty($this->videos)) {
            $this->videos[] = ['video_url' => '', 'title' => '', 'is_unlock' => false];
        }
    }
    
    public function addUrl()
    {
        $this->videos[] = ['video_url' => '', 'title' => '', 'is_unlock' => false];
    }

    public function removeUrl($index)
    {
        unset($this->videos[$index]);
        $this->videos = array_values($this->videos);
    }

    public function store()
    {
        try {
            $input = $this->validate();
            $dateTime = Carbon::createFromFormat('Y-m-d H:i', "{$this->date} {$this->time}");
            $ran = Str::random(5);
            $input['slug'] = str::slug($this->title) . '-' . $ran;
            $input['dtm'] = $dateTime;
            $input['user_id'] = Auth::user()->id;
            $input['image'] = $this->image->store('posters', 'public');

            if ($this->category === ConstData::SERIES) {
                DB::transaction(function() use ($input) {
                   return tap(Event::create($input), function (Event $event){
                        $this->saveVideoUrl($event);
                   }); 
                });
            } else {
                Event::create($input);
            }
            

            $this->resetForm();
            toastify()->success('Event berhasil ditambahkan!');
            return redirect()->route('admin.event.index');
        } catch (\Exception $e) {
            toastify()->error('Event gagal ditambahkan!');
            return redirect()->back();
        }
    }

    protected function saveVideoUrl(Event $event) {
        foreach ($this->videos as $video) {
            Series::create([
                'event_id'=>$event->id,
                'title'=>$video['title'],
                'is_unlock'=>$video['is_unlock'],
                'video_url'=>$video['video_url']
            ]);
        }
    }




    private function resetForm()
    {
        $this->title = null;
        $this->date = null;
        $this->time = null;
        $this->category = null;
        $this->image = null;
        $this->description = null;
    }

    public function render()
    {
        return view('livewire.admin.event.create-event');
    }
}
