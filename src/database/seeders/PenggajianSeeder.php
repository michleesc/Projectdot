<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penggajian;

class PenggajianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset table
        Penggajian::truncate();
        
        //buat data penggajian
        Penggajian::create(['id_karyawan' => 2, 'jam_kerja' => 6]);
        Penggajian::create(['id_karyawan' => 3, 'jam_kerja' => 4]);   
    }
}
