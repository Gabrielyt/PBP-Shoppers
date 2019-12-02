<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';
    protected $fillable = ['id_barang','nama','harga','foto','stok','keterangan','id_penjual'];

}
