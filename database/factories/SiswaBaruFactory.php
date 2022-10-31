<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaBaruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_pendaftaran' => $this->faker->randomNumber(5, true),
            'nisn' => $this->faker->unique()->randomNumber(8, true),
            'nama' =>$this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'jns_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha', 'Kunghocu', 'Kepercayaan Kepada Tuhan']),
            'alamat' => $this->faker->address(),
            'telp' => $this->faker->randomNumber(8, true),
            'email' => $this->faker->email(),
            'nik' => $this->faker->randomNumber(8, true),
            'nilai_raport' => $this->faker->randomNumber(2, true),
            'asal_sekolah' => $this->faker->city(),
            'nama_ibu' =>$this->faker->name(),
            'nama_ayah'=>$this->faker->name(),
            'telp_ortu' => $this->faker->randomNumber(8, true),
            'pekerjaan_ayah' => $this->faker->jobTitle(),
            'pekerjaan_ibu' => $this->faker->jobTitle(),
            'tgl_daftar' => $this->faker->date('Y-m-d')
        ];
    }
}
