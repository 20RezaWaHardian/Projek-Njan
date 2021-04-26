<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;

class GambarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('gambar.formGambar');
    }

    public function kelolaIndex()
    {
        $gambar=Gambar::all();
        return view('gambar.gambar',compact('gambar'));
    }

    public function store(Request $request)
    {
        $gambar = new Gambar();

        $gambar->keterangan = $request->input('keterangan');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/gambar/', $filename);
            $gambar->image = $filename;
        }else{
            return $request;
            $gambar->image = '';
        }
        // $gambar= $request->file('image');
        // $filename= $gambar->getClientOriginalName();
        // $gambar->move('uploads/gambar/', $filename);
        $gambar->save();
        
        return redirect('/kelolagambar'); 
    }

    public function edit($id)
    {
        $gambar=Gambar::find($id);
        return view('gambar.editGambar', compact('gambar'));
    }

    public function update(Request $request, $id)
    {
        $ubah=Gambar::findorfail($id);
        $awal=$ubah->image;

        $gambar = [
            'keterangan'=>$request['keterangan'],
            'image'=>$awal,
        ];
        $request->image->move(public_path().'uploads/gambar/', $awal);
        $ubah->update($gambar);
        
        return $gambar;

    }

    public function destroy($id)
    {
        $gambar=Gambar::find($id);
        $gambar->delete();

        return redirect()->back();
    }
}
