<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use Session;
use app\Http\Controllers\CartController;


class BarangController extends Controller
{
    function home(){
      $id_user= request()->Session()->get('id_user');
      $data1= DB::table('cart_users')->where('id_user',$id_user)->count();
      Session::put('count_cart',$data1);
        $data = DB::table('file')->get();
        return view('toko/shoppers/index',['barang' => $data]);
    }


    function tambah(){
        return view('tambah');
    }

    function qinsert(Request $req){
        DB::table('barang')->insert(
            ['kode'=>$req->kode,
            'nama'=>$req->nama,
            'harga'=>$req->harga]
        );
        return redirect('/admin/tambahdata');
    }

    function hapus($id){
        DB::table('barang')->where('id',$id)->delete();
        return redirect('/admin/listdata');
    }

    function tampilupdate($id){
        $data2 = DB::table('barang')->where('id',$id)->get();
        return view('update',['tampilupdate' => $data2]);
    }

    function updatedata(Request $request){
        DB::table('barang')->where('id',$request->id)->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga]);
            return redirect('/');
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



    }
