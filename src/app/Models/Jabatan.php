<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $connection = 'db_jabatan';
    protected $table = 'jabatans';
    protected $fillable = [
        'nama_jabatan', 'created_at', 'updated_at'
    ];
}
