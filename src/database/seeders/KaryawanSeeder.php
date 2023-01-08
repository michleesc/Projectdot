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
        //reset table
        Karyawan::truncate();

        //buat data karyawan
        $karyawan1 = Karyawan::create(['nama_karyawan' => 'Wisnu Hidayat', 'gaji_perjam' => 20000, 'id_jabatan' => 1]);
        $karyawan2 = Karyawan::create(['nama_karyawan' => 'Vernando', 'gaji_perjam' => 15000, 'id_jabatan' => 2]);
        $karyawan3 = Karyawan::create(['nama_karyawan' => 'Fazhli Ridwan', 'gaji_perjam' => 10000, 'id_jabatan' => 3]);

    }
}
