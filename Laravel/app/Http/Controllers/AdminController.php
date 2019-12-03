<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Storage;
use Session;
use auth;
use App\user;

class AdminController extends Controller
{

    public function login(){
      $id_user= request()->Session()->get('id_user');
      $role = DB::table('users')->where('id',$id_user)->get()->first();
      if($role->role==1){
          return view('admin/login');
      }else{
          return view('/');
      }

    }


    public function authcek(Request $request){
        $user = $request->user;
        $password = $request->pass;

        $data = DB::table('users')->where('username',$user)->first();
        #$data2 = ModelUser::where('username',$user)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('username',$data->username);
                Session::put('login',TRUE);
                return redirect('admin');
            }
            else{
                return redirect('admin/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('admin/login')->with('alert','Password atau Email, Salah!');
        }

    }

    public function admin(){
      $id_user= request()->Session()->get('id_user');
      $role = DB::table('users')->where('id',$id_user)->get()->first();
      if($role->role==1){
          return view('admin/home');
      }else{
          return redirect('/');
      }
    }

    public function tampil(){
        return view('admin/tambah');
    }

    public function list(){
            $data = DB::table('file')->get();
            return view('admin/list',['listdata' => $data]);

    }

    function tampilupdate($id_barang){
        $data2 = DB::table('file')->where('id_barang',$id_barang)->get();
        return view('admin/update',['tampilupdate' => $data2]);
    }

    function insertbarang(Request $req){
        $photo = $req->file('barang')->getClientOriginalName();
        $destination = base_path() . '/public/barangs';
        $req->file('barang')->move($destination, $photo);



       DB::table('file')->insert(
        ['nama'=>$req->nama,
        'harga'=>$req->harga,
        'foto'=>$photo,
        'stok'=>$req->stok,
        'keterangan'=>$req->keterangan,
        'id_penjual'=>$req->idpenjual]);

       return redirect()->back()->with('sukses','Data Berhasil di Tambah');
    }


    function updatedata(Request $req){


        if($req->barang !=''){
            $photo = $req->file('barang')->getClientOriginalName();
            $fotlam = $req->foto;
            $destination = base_path() . '/public/barangs/'.$fotlam;
            unlink($destination);
            $destination2 = base_path() . '/public/barangs';
            $req->file('barang')->move($destination2, $photo);
            DB::table('file')->where('id_barang',$req->id_barang)->update([
                'nama' => $req->nama,
                'harga' => $req->harga,
                'stok' => $req->stok,
                'foto' => $photo,
                'keterangan' => $req->keterangan,
                'id_penjual' => $req->idpenjual]);
        }
        else {
            DB::table('file')->where('id_barang',$req->id_barang)->update([
                'nama' => $req->nama,
                'harga' => $req->harga,
                'stok' => $req->stok,
                'keterangan' => $req->keterangan,
                'id_penjual' => $req->idpenjual]);
        }


        return redirect()->back();
    }

    function hapus($id_barang){
        DB::table('file')->where('id_barang',$id_barang)->delete();
        return redirect('/admin/listdata');
    }
    public function listuser(){
            $data = DB::table('users')->get();
            return view('admin/listUser',['listdata' => $data]);

    }
    function tampilupdateuser($id){
        $data2 = DB::table('users')->where('id',$id)->get();
        return view('admin/updateUser',['tampilupdate' => $data2]);
    }
    function userUpdate(Request $req){

            DB::table('users')->where('id',$req->id)->update([
                'name' => $req->name,
                'email' => $req->email,
                'role' => $req->role,
                'alamat' => $req->alamat]);
              return redirect('/admin/listuser');
        }

        function hapususer($id){
            DB::table('users')->where('id',)->delete();
            return redirect('/admin/listuser');
        }




}
