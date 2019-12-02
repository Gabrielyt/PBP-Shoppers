<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Cart_user;
use app\File;
use Session;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{


  function cart(){
    $id_user= request()->Session()->get('id_user');
    $data1= DB::table('cart_users')->where('id_user',$id_user)->count();
    Session::put('count_cart',$data1);
    if(!$id_user){
      return redirect('login');
    }else{
    $data = DB::table('cart_users')->where('id_user',$id_user)->get();
      return view('toko/shoppers/cart',['cart'=>$data]);

   }
  }
  function cart_tambah($id){

    $id_user= request()->Session()->get('id_user');
    $file = DB::table('file')->where('id_barang',$id)->first();
    $cart = DB::table('cart_users')->where('id_barang',$id)->first();
    if(!$id_user){
      return redirect('login');
    }else{


      if($id=$cart){
      $har=$cart->harga;
      $quant = $cart->jumlah;
      $tot = $cart->total;
      $quant+=1;
      $tot1=$quant*$har;
      DB::table('cart_users')->where('id_user',$id_user)->where('id_barang', $cart->id_barang)->update([
          'jumlah' => $quant,
          'total' => $tot1]);

      }else{
        DB::table('cart_users')->insert(
          ['id_user'=>$id_user,
          'id_barang'=>$file->id_barang,
          'nama'=>$file->nama,
          'jumlah'=>1,
          'harga'=>$file->harga,
          'total'=>$file->harga,
          'foto'=>$file->foto]
        );

      }

      return redirect('/');
    }
  }
    function hapus($id){
        DB::table('cart_users')->where('id_cart',$id)->delete();
        return redirect('/cart');
    }

  }
