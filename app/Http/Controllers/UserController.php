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
        $this->validate($r,[
            'username' => 'required|unique:users,username'
        ]
    );
        // $username = User::get();
        // if($username->username != $r->username){
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
            \Session::flash('error','Data Berhasil Disimpan');
            $response = array(
                'status' => 'error',
                'url' => action('UserController@index'),
                );
            return $response;
            // return redirect()->action('UserController@index');
        }
    }

    public function update(Request $request)
    {
        $this-> validate($request,[
            'username' => 'required|unique:users,username'
        ], [
            'username.unique' =>" Username Ini Telah Tersimpan"
        ]
    );
       
      
        $user = User::findOrFail($request->id);
        // if($user->username != $request->username){
        //     \Session::flash('success','Data Berhasil Disimpan');
          $user->update([
            'username' => $request->username,
            // 'email' =>  $r->email,
            'password' => bcrypt($request->password),
            // 'rule'=>$request->rule,
        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Update']);
        // if($v == true){
        // return redirect()->back()->with(['success' => 'Data Berhasil Update']);
        // }else{
        //     return redirect()->back()->with(['error' => 'Data Berhasil Update']);
        // }

        // dd($user);
        
    }

    public function destroy($id){
        $user = User::where('id',$id);
        $user->delete();

        return redirect()->back()->with(['error' => 'Data Berhasil Hapus']);
    }
}

