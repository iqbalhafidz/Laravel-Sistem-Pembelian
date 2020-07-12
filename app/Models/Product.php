<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    // use SoftDeletes;

    protected $table = "product";

    Protected $fillable =[
        'nama','keterangan','foto','harga','diskon'
    ];

    Protected $hidden = [

    ];
}
