<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model{
    protected $table = 'provinsi';

    function kabupaten(){
        return $this->hasMany(Kabupaten::class, 'id_provinsi');
    }
}

