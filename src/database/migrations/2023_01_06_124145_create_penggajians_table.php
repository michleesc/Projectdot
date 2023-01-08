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
        Schema::connection('db_penggajian')->dropIfExists('penggajians');
            Schema::connection('db_penggajian')->create('penggajians', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_karyawan')->nullable();;
                $table->string('jam_kerja');
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
        Schema::dropIfExists('penggajians');
    }
};
