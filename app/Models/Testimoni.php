<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    //
    // use SoftDeletes;

    protected $table = "testimoni";

    Protected $fillable =[
        'gambar','keterangan'
    ];

}
