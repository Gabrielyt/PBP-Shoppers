<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PenjualController extends Controller
{
  function tokoview(){
    $id_user= request()->Session()->get('id_user');
      $data = DB::table('file')->where('id_penjual',$id_user)->get();
    return view('toko/shoppers/shop',['listdata' => $data]);
  }
  function tampiltambah(){
    return view('toko/shoppers/shoptambah');
  }

  function insertbarang(Request $req){
     $id_user= request()->Session()->get('id_user');
      $photo = $req->file('barang')->getClientOriginalName();
      $destination = base_path() . '/public/barangs';
      $req->file('barang')->move($destination, $photo);



     DB::table('file')->insert(
      ['nama'=>$req->nama,
      'harga'=>$req->harga,
      'foto'=>$photo,
      'stok'=>$req->stok,
      'keterangan'=>$req->keterangan,
      'id_penjual'=>$id_user]);

     return redirect()->back()->with('sukses','Data Berhasil di Tambah');
  }
  function tampilupdate($id_barang){
      $data2 = DB::table('file')->where('id_barang',$id_barang)->get();
      return view('toko/shoppers/shopedit',['tampilupdate' => $data2]);
  }
  function updatedata(Request $req){
      $id_user= request()->Session()->get('id_user');

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
              'id_penjual' => $id_user]);
      }
      else {
          DB::table('file')->where('id_barang',$req->id_barang)->update([
              'nama' => $req->nama,
              'harga' => $req->harga,
              'stok' => $req->stok,
              'keterangan' => $req->keterangan,
              'id_penjual' => $id_user]);
      }


      return redirect('tokoview');
  }
  function hapusdata($id_barang){
      DB::table('file')->where('id_barang',$id_barang)->delete();
      return redirect('/tokoview');
  }

  function tampilpesanan(){
    $id_user= request()->Session()->get('id_user');
      $data = DB::table('transaksi')->where('id_penjual',$id_user)->get();
    return view('toko/shoppers/pesanan',['list'=>$data]);
  }

  function updatestatus(Request $req){
    DB::table('transaksi')->where('id_user',$req->id_user)->where('id',$req->id_pesanan)->update([
        'status'=>$req->status]);

      return redirect()->back();
  }


}
