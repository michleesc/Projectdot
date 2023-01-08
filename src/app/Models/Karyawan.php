<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $connection = 'db_karyawan';
    protected $table = 'karyawans';
    protected $fillable = [
        'id_jabatan', 'nama_karyawan', 'gaji_perjam', 'id_jabatan','created_at', 'updated_at'
    ];
}
