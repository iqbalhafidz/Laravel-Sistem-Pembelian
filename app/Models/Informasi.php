<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Informasi extends Model
{
    //
    // use SoftDeletes;

    protected $table = "informasi";

    Protected $fillable =[
        'judul','tagline','alamat','tlpn','hp','email','linkfb','linkig'
    ];

    //   Protected $fillable =[
    //     'judul','tagline','logo','bg','alamat','tlpn','hp','email','linkfb','linkig'
    // ];

    Protected $hidden =[
        'logo','bg'
    ];

}
