<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksiModel extends Model
{
    protected $table ='detailtransaksi';
    protected $fillable = ['id','id_penjualan','id_customer','tanggal','point','total'];
}