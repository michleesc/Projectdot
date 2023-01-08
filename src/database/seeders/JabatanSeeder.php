<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;


class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset table
        Jabatan::truncate();

        //buat data jabatan
        $jabatan1 = Jabatan::create(['nama_jabatan' => 'Manager']);
        $jabatan2 = Jabatan::create(['nama_jabatan' => 'Supervisor']);
        $jabatan3 = Jabatan::create(['nama_jabatan' => 'Staff']);
    }
}
