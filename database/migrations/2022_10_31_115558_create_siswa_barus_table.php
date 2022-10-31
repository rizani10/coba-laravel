<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaBarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_barus', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran');
            $table->string('nisn')->unique();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kunghocu', 'Kepercayaan Kepada Tuhan']);
            $table->text('alamat');
            $table->string('telp');
            $table->string('email')->nullable();
            $table->string('nilai_raport');
            $table->string('asal_sekolah');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('telp_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->timestamp('tgl_daftar')->nullable();
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
        Schema::dropIfExists('siswa_barus');
    }
}
