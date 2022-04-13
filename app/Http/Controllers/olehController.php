<?php

namespace App\Http\Controllers;

use App\Models\oleh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'deskripsi'=>'required|max:255'
        ]);

        $oleh = new oleh();
        $oleh->nama = $request->nama;
        $oleh->gambar = $request->file('gambar')->store('gambarOleh');
        $oleh->deskripsi = $request->deskripsi;
        $oleh->terjual = 0;
        $oleh->save();

        return redirect('/oleh')->with('Success', 'Data oleh-oleh berhasil ditambahkan');
        //$request->file('gambar')->store('gambarOleh');
    }
    
    public function edit(Request $request, $id){
        $request->validate([
            'gambar'=>'image|file|max:512',
            'deskripsi'=>'max:255'
        ]);

        $oleh = oleh::find($id);
        if ($request->gambar == '' && $request->deskripsi == ''){
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
        $oleh = oleh::find($id);
        Storage::delete($oleh->gambar);
        $oleh->delete();
        return redirect('/oleh')->with('Success', 'Data oleh-oleh telah berhasil dihapus');
    }
}
