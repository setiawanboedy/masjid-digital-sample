<?php

namespace App\Http\Controllers\Frontend;

use App\Helper\ConstData;
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
        $series_events = Event::where('category', ConstData::SERIES)->orderBy('created_at', 'desc')->get();
        $online_events = Event::where('category', ConstData::ONLINE)->orderBy('created_at', 'desc')->get();
        $offline_events = Event::where('category', ConstData::OFFLINE)->orderBy('created_at', 'desc')->get();

        $response = [
            'events' => $events,
            'series_events' => $series_events,
            'online_events' => $online_events,
            'offline_events' => $offline_events,

        ];
        return view('frontend.home', $response);
    }

    public function webSeries(Request $request)
    {
        $series_events = Event::where('category', ConstData::SERIES)->orderBy('created_at', 'desc')->get();

        $response = [
            'series_events' => $series_events,

        ];
        return view('frontend.category.event-web-series', $response);
    }
    public function eventOnline(Request $request)
    {
        $online_events = Event::where('category', ConstData::ONLINE)->orderBy('created_at', 'desc')->get();

        $response = [
            'online_events' => $online_events,

        ];
        return view('frontend.category.event-online', $response);
    }
    public function eventOffline(Request $request)
    {
        $offline_events = Event::where('category', ConstData::OFFLINE)->orderBy('created_at', 'desc')->get();

        $response = [
            'offline_events' => $offline_events,

        ];
        return view('frontend.category.event-offline', $response);
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

    public function transactionDetail($id, Request $request)
    {
        $transaction = Transaction::findOrFail($id);
        return view('frontend.detail-transaction', [
            'transaction' => $transaction
        ]);
    }

    public function pay($slug, Request $request)
    {
        try {
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
            return redirect()->route('transaction.index');
        } catch (\Exception $e) {
            toastify()->error('Gagal membuat transaksi');
            return redirect()->back();
        }
    }

}
