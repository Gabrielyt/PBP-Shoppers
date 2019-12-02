<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class TransController extends Controller
{
    function tambah(){
      $id_user= request()->Session()->get('id_user');
      $data = DB::table('cart_users')->where('id_user',$id_user)->get();
      $data1= DB::table('users')->where('id',$id_user)->get()->first();
      $cont=$data1->no_pembelian+1;
      $alm=$data1->alamat;
      $nm=$data1->name;

      foreach ($data as $a) {
        DB::table('transaksi')->insert(
          ['id_user'=>$id_user,
          'id_penjual'=>$a->id_penjual,
          'id_barang'=>$a->id_barang,
          'nama_barang'=>$a->nama,
          'jumlah_barang'=>$a->jumlah,
          'total'=>$a->total,
          'status'=>0,
         'no_pembelian'=>$cont,
         'alamat'=>$alm,
         'nama_pembeli'=>$nm
        ]);
       }

      DB::table('users')->where('id',$id_user)->update([
        'no_pembelian'=>$cont
      ]);

      DB::table('cart_users')->where('id_user',$id_user)->delete();
      return redirect('thankyou');
    }
}
