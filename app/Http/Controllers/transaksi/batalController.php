<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class batalController extends Controller
{
    public function index(){
        return view('transaksi.table-batal');
    }
}