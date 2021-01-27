<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiahmodel extends Model
{
    protected $table ='hadiah';
    protected $fillable = ['id','jenis_hadiah','jumlah_point'];
}
