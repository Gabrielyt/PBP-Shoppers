<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Cart_user;
use app\File;
use Session;
use Illuminate\Support\Facades\DB;
class CheckoutController extends Controller
{
    function checkout(){
      $id_user= request()->Session()->get('id_user');
      $data1= DB::table('cart_users')->where('id_user',$id_user)->get();
      return view('toko/shoppers/Checkout',['cart' => $data1]);

    }
    function getThank(){

      return view('toko/shoppers/thankyou');

    }
}
