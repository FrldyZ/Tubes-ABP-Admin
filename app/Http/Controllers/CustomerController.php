<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        return view('tableCustomer',[
            'title'=> 'Customer',
            'customer' => customer::all()
        ]);
    }
}
