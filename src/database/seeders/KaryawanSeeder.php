<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = new Karyawan;
        $karyawan-> nama_karyawan = 'Vernando';
        $karyawan-> jabatan_karyawan = 'Staff';
        $karyawan-> umur_karyawan = '22';
        $karyawan->save();

    }
}
