<?php

namespace App\Http\Controllers;

use App\Models\oleh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class customerController extends Controller
{
    public function index(){
        return view('tableCustomer',[
            'title'=> 'Daftar Customer',
            'customers' => customer::all()
        ]);
    }
    
    public function store(Request $request){

        $request->validate([
            'nama'=>'required|unique:customer|max:255',
            'email'=>'required|unique:customer|max:255',
            'username'=>'required|unique:customer|max:255'
        ]);

        $customer = new customer();
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->username = $request->username;
        $customer->save();

        return redirect('/customer')->with('Success', 'Data Customer berhasil ditambahkan');
    }
    
    public function edit(Request $request, $id){
        $request->validate([
            'nama'=>'max:255',
            'email'=>'max:255',
            'username'=>'max:255'
        ]);

        $customer = customer::find($id);
        if ($request->nama == '' && $request->deskripsi == ''){
            return redirect('/oleh')->with('Success', 'Data '.$oleh->nama.' tidak ada yang diubah');
        } else if ($request->gambar == ''){
            $oleh->deskripsi = $request->deskripsi;
            $oleh->save();
            return redirect('/oleh')->with('Success', 'Data deskripsi '.$oleh->nama.' telah diubah');
        } else if ($request->deskripsi == ''){
            Storage::delete($oleh->gambar);
            $oleh->gambar = $request->file('gambar')->store('gambarOleh');
            $oleh->save();
            return redirect('/oleh')->with('Success', 'Data gambar '.$oleh->nama.' telah diubah');
        } else {
            $oleh->deskripsi = $request->deskripsi;
            Storage::delete($oleh->gambar);
            $oleh->gambar = $request->file('gambar')->store('gambarOleh');
            return redirect('/oleh')->with('Success', 'Data gambar '.$oleh->nama.' telah diubah');
        }
    }

    public function delete($id){
        
    }
}
