<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset table
        User::truncate();

        // membuat data user
        $user = User::create([
            'username' => 'client', 
            'password' => Str::random(40)
        ]);

        // contoh menggunakan migration
        // $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        // DB::connection('project_akhir')->table('users')->insert([
        //     'username'  => 'client',
        //     'password'  => Str::random(40),
        //     'created_at' => $timestamp,
        //     'updated_at' => $timestamp
        // ]);   
    }
}
