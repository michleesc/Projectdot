<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $connection = 'project_akhir';
    protected $fillable = [
        'username'
    ];

    protected $hidden = [
        'password',
    ];
}
