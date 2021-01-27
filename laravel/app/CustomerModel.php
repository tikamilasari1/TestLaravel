<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table ='customer';
    protected $fillable = ['id','nama_customer','alamat_customer','no_tlp'];
}
