<?php

namespace App\Http\Controllers;

use App\Models\oleh;
use Illuminate\Http\Request;

class olehController extends Controller
{
    public function index(){
        return view('tableOleh',[
            'title'=> 'Daftar Oleh',
            'olehs' => oleh::all()
        ]);
    }
    
    public function store(Request $request){

        $request->validate([
            'nama'=>'required|unique:oleh|max:255',
            'gambar'=>'required|image|file|max:512',
            'deskripsi'=>'required'
        ]);

        $oleh = new oleh();
        $oleh->nama = $request->nama;
        $oleh->gambar = $request->file('gambar')->store('gambarOleh');
        $oleh->deskripsi = $request->deskripsi;
        $oleh->terjual = 0;
        $oleh->save();
        //$request->file('gambar')->store('gambarOleh');
    }
    
    public function edit($id){

    }

    public function delete($id){
        
    }
}
