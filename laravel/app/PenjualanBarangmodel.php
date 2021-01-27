<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanBarangmodel extends Model
{
    protected $table ='penjualanbarang';
    protected $fillable = ['id','id_barang','jumlah','harga','total'];

    public function BarangModel()
    { 
    	return $this->hasMany(BarangModel::class);
    }
}
