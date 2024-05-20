<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BackendController extends Controller
{
    public function createEvent(Request $request)
    {
        return view('admin.event.create');
    }

    public function uploadImageTextEditor(Request $request)
    {
        try {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $path = $file->store('editors', 'public');
                $userId = Auth::user()->id;
                Media::create([
                    'user_id'=> $userId,
                    'image_url'=>$path
                ]);
                return response()->json(['location' => Storage::url($path)]);
            }
    
            return response()->json(['error' => 'No file uploaded'], 400);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return response()->json([
                'uploaded' => false,
                'error' => [
                    'message' => $e->getMessage()
                ]
            ]);
        }
    }
}
