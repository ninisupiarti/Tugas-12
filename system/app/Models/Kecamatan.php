<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model{
    protected $table = 'kecamatan';

    function desa(){
        return $this->hasMany(Desa::class, 'id_desa');
    }

    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'id_pkabupaten');
    }
}
