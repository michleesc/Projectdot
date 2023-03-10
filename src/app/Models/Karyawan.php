<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $connection = 'db_karyawan';
    protected $table = 'karyawans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_jabatan', 'nama_karyawan', 'gaji_perjam', 'id_jabatan','created_at', 'updated_at'
    ];

    public function jabatans()
    {
        return $this->hasOne('App\Models\Jabatan','id_jabatan','id');
    }

    public function penggajians()
    {
        return $this->hasMany('App\Models\Penggajian','id_karyawan', 'id');
    }
}
