<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();

        return view('data.dataUser', compact('user'));
        // dd($user); 
    }

    public function tambah()
    {
        return view('data.tambah');
    }

    public function dataTambah(Request $r){
        User::insert([
            'username' => $r->username,
            // 'email' =>  $r->email,
            'password' => bcrypt($r->password),
            'rule'=>$r->rule,
        ]);
        if($r->ajax()){
            \Session::flash('success','Data Berhasil Disimpan');
            $response = array(
                'status' => 'success',
                'url' => action('UserController@index'),
                );
            return $response;
        }else{
            \Session::flash('success','Data Berhasil Disimpan');
            return redirect()->action('UserController@index');
        }
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update([
            'username' => $request->username,
            // 'email' =>  $r->email,
            'password' => bcrypt($request->password),
            'rule'=>$request->rule,
        ]);

        // dd($user);
        return redirect()->back()->with(['success' => 'Data Berhasil Update']);
    }

    public function destroy($id){
        $user = User::where('id',$id);
        $user->delete();

        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }
}

