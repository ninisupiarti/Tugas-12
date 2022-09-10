<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model{
    protected $table = 'kabupaten';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'id_Kabupaten');
    }

    function provinsi(){
        return $this->belongsTo(Provinsi::class, 'id_provinsi');
    }
}
