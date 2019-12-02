<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_user extends Model
{
    protected $table = 'cart_users';
    protected $fillable = ['id_cart','id_user','id_barang','nama','jumlah','harga','total','foto','id_penjual'];
}
