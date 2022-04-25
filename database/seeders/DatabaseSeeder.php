<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        News::create([
            'title' => 'Test',
            'image' => 'test.png',
            'body' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt omnis eligendi obcaecati harum recusandae accusamus laudantium vitae nulla odit itaque, exercitationem est architecto maiores expedita facere quasi? Sequi, impedit doloremque.'
        ]);
    }
}
