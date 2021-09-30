<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('transaksi')->paginate(10);

        return view('index' ,['transaksi' => $transaksi]);
    }
}
