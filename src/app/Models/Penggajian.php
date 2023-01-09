<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    //
    protected $connection = 'db_penggajian';
    protected $table = 'penggajians';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_karyawan', 'jam_kerja', 'created_at', 'updated_at'
    ];

    public function karyawans()
    {
        return $this->belongsTo('App\Models\Karyawan','id_karyawan','id');
    }
}
