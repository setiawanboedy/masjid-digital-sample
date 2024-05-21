<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(Request $request) {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('frontend.home',[
            'events'=>$events
        ]);
    }

    public function detailEvent($slug, Request $request) {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('frontend.detail',[
            'event'=>$event
        ]);
    }
}
