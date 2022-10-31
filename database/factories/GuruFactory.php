<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->randomNumber(8, true),
            'nuptk' =>  $this->faker->randomNumber(8, true),
            'nik' =>   $this->faker->randomNumber(8, true),
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'jns_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha', 'Kunghocu', 'Kepercayaan Kepada Tuhan']),
            'alamat' =>  $this->faker->address(),
            'telp' =>  $this->faker->randomNumber(8, true),
            'email' =>  $this->faker->email(),
            'jabatan' => $this->faker->randomElement(['Kepala Sekolah', 'Guru Mata Pelajaran', 'Tenaga Administrasi Sekolah', 'Operator Sekolah', 'Pustakawan', 'Tenaga Kebersihan','Penjaga Malam']),
        ];
    }
}
