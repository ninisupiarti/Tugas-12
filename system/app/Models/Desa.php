<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model{
    protected $table = 'desa';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class, 'id_kecamatan');
    }
}
