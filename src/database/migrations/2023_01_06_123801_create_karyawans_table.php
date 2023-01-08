<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('db_karyawan')->dropIfExists('karyawans');
            Schema::connection('db_karyawan')->create('karyawans', function (Blueprint $table) {
                $table->id();
                $table->string('nama_karyawan');
                $table->string('gaji_perjam');
                $table->unsignedBigInteger('id_jabatan')->nullable();;
                $table->timestamps();

                
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
};
