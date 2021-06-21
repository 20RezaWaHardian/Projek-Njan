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
        $this->validate($request,[
            'image' => 'required|mimes:jpg,png,jpeg'
        ],
        [
            'image.required' => 'Document Harus Di Isi',
            'image.mimes' => 'Format Document Harus JPG, JPEG atau PNG',
        ]);
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

    public function update(Request $request)
    {
        $id = $request->id_gambar;

        $gambar=Gambar::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/gambar/', $filename);
        }else{
            $filename=$gambar->image;
        }
       
        $gambar->update([
            'keterangan'=>$request->keterangan,
            'image'=>$filename,
        ]);

        return redirect()->back();


    }

    public function destroy($id)
    {
        $gambar=Gambar::find($id);
        $gambar->delete();

        return redirect()->back();
    }
}
