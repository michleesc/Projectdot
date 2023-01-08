<?php

namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $connection = 'db_jabatan';
    protected $table = 'jabatans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_jabatan', 'created_at', 'updated_at'
    ];

    public function karyawans()
    {
        return $this->hasOne('App/Karyawan','id_jabatan', 'id');
    }
}
