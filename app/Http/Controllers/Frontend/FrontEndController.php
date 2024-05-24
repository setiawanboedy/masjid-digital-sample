<?php

namespace App\Http\Controllers\Frontend;

use App\Helper\TransactionHelper;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function home(Request $request)
    {
        $events = Event::orderBy('created_at', 'desc')->get();
        return view('frontend.home', [
            'events' => $events
        ]);
    }

    public function detailEvent($slug, Request $request)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('frontend.detail', [
            'event' => $event
        ]);
    }

    public function payment($slug, Request $request)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('frontend.payment', [
            'event' => $event
        ]);
    }
    public function pay($slug, Request $request)
    {
        try {
            // dd($request->all());
            if ($request->amount) {
                $event = Event::where('slug', $slug)->firstOrFail();
                $transactionCode = TransactionHelper::generateTransactionCode();
                Transaction::create([
                    'user_id' => Auth::user()->id,
                    'event_id' => $event->id,
                    'token' => 'dsfjk',
                    'code' => $transactionCode,
                    'amount' => $request->amount,
                ]);
            }
            toastify()->success('Berhasil membuat transaksi');
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
            toastify()->error('Gagal membuat transaksi');
            return redirect()->back();
        }
    }

    // public function transaction(Request $request)
    // {
    //     $userId = $request->user()->id;
    //     $transactions = Transaction::where('user_id', $userId);
    //     return view('frontend.payment', [
    //         'event' => $event
    //     ]);
    // }


}
