<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table('users')->insert([
            'username'  => 'client',
            'password'  => Str::random(40),
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
}
