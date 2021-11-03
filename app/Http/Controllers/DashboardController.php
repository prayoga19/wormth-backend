<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        // menghitung total transaksi yang status 'sukses'
        $income = Transaction::where('transaction_status','SUCCESS')->sum('transaction_total');
        // menghitung jumlah transaksi
        $sales = Transaction::count();
        // mengambil 5 data terakhir yang masuk
        $items = Transaction::orderBy('id','DESC')->take(5)->get();

        $pie = [
            'pending' => Transaction::where('transaction_status','PENDING')->count(),
            'failed' => Transaction::where('transaction_status','FAILED')->count(),
            'success' => Transaction::where('transaction_status','SUCCESS')->count()
        ];

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie,
        ]);
    }
}
