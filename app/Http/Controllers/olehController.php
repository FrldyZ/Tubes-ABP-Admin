<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class olehController extends Controller
{
    public function index(){
        return view('tableOleh',[
            'title'=> 'Daftar Oleh'
        ]);
    }
    
    public function store($id){

    }

    public function delete($id){
        
    }
}
