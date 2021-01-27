<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table ='barang';
    protected $fillable =['kode_barang','nama_barang','satuan','harga','stok'];

    public function PenjualanBarang()
    {
    	return $this->belongsTo(PenjualanBarang::class);
    }
}
