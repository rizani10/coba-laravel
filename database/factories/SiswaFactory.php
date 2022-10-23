<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->randomNumber(),
            'nisn' => $this->faker->randomNumber(),
            'nama' =>$this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'jns_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Budha', 'Kunghocu', 'Kepercayaan Kepada Tuhan']),
            'alamat' => $this->faker->address(),
            'telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'nik' => $this->faker->randomNumber(),
            'nama_ibu' =>$this->faker->name(),
            'nama_ayah'=>$this->faker->name(),
            'pekerjaan_ayah' => $this->faker->jobTitle(),
            'pekerjaan_ibu' => $this->faker->jobTitle(),
            'kelas_id' => mt_rand(1, 3)
        ]; 
    }
}

