<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
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

        Kelas::create([
            'nama_kelas' => 'VII'
        ]);
        Kelas::create([
            'nama_kelas' => 'VIII'
        ]);
        Kelas::create([
            'nama_kelas' => 'IX'
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

        // Post::create([
        //     'title' => 'Laravel 5.7',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'laravel-5.7',
        //     'excerpt' => 'Laravel 5.7 is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern.',
        //     'body' => 'Laravel 5.7 is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Laravel is built with best-of-breed PHP components and libraries, making it the ideal choice for web application development. Laravel is free to use, and has a variety of powerful features to build robust applications. Laravel is written in PHP, and is not dependent on any external frameworks or programming languages. Laravel is open source and licensed under the MIT license.',
        // ]);

        // Post::create([
        //     'title' => 'My Blog',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'my-blog',
        //     'excerpt' => 'This is my blog',
        //     'body' => 'This is my blog content here ... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, eum minima ipsa excepturi dolorem inventore atque sint reprehenderit enim veritatis cupiditate perferendis. Officiis fuga iusto earum necessitatibus dolore asperiores modi quisquam recusandae nisi atque voluptatem, quis similique quam aut! Atque sint, libero quasi explicabo id pariatur dolores obcaecati ipsam dolore!',
        // ]);

        // Post::create([
        //     'title' => 'Codeigniter',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'codeigniter',
        //     'excerpt' => 'Codeigniter is a powerful PHP framework for web development',
        //     'body' => '<p>CodeIgniter is a PHP MVC framework used for developing web applications rapidly. CodeIgniter provides out of the box libraries for connecting to the database and performing various operations like sending emails, uploading files, managing sessions, etc.</p><p>CodeIgniter is a powerful PHP framework for web development. It is a free open source software and is used for developing web applications rapidly. CodeIgniter provides out of the box libraries for connecting to the database and performing various operations like sending emails, uploading files, managing sessions, etc.</p>',
        // ]);
    }
}
