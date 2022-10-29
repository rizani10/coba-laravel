<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Category;
use App\Models\Guru;
use App\Models\RuangKelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {





        // seeding
        User::create([
            'name' => 'Muhammad Faisal Rizani',
            'username' => 'Rizani12',
            'email' => 'faisalrizani12@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => 1
        ]);

        Guru::factory(50)->create();

        RuangKelas::create([
            'guru_id'   => 3,
            'class' => 'VII',
        ]);
        RuangKelas::create([
            'guru_id'   => 15,
            'class' => 'VIII',
        ]);
        RuangKelas::create([
            'guru_id'   => 30,
            'class' => 'IX',
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',

        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',

        ]);

        // membuat post dengan factory
        Post::factory(100)->create();

        Siswa::factory(200)->create();
    }
}
