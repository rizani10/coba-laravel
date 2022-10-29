<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nuptk');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jns_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kunghocu', 'Kepercayaan Kepada Tuhan']);
            $table->text('alamat');
            $table->string('telp');
            $table->string('email');
            $table->enum('jabatan', [
                'Kepala Sekolah',
                'Guru Mata Pelajaran',
                'Tenaga Administrasi Sekolah',
                'Operator Sekolah',
                'Pustakawan',
                'Tenaga Kebersihan',
                'Penjaga Malam',
            ]);
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
        Schema::dropIfExists('gurus');
    }
}
