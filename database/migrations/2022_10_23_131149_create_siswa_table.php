<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id');
            $table->string('nis');
            $table->string('nisn');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kunghocu', 'Kepercayaan Kepada Tuhan']);
            $table->text('alamat');
            $table->string('telp');
            $table->string('email');
            $table->string('nik');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
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
        Schema::dropIfExists('siswa');
    }
}
