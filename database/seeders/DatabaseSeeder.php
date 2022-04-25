<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use App\Models\Admin;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // section default
        Section::create([
            'name' => 'Tentang',
            'image' => '',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, a officia! Itaque magnam minus aperiam fuga unde, a voluptatibus, eaque dolorum beatae deleniti tempore error tenetur? Doloribus fuga nulla corrupti!',
            'type' => 'info'
        ]);
        Section::create([
            'name' => 'Visi',
            'image' => '',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, a officia! Itaque magnam minus aperiam fuga unde, a voluptatibus, eaque dolorum beatae deleniti tempore error tenetur? Doloribus fuga nulla corrupti!',
            'type' => 'info'
        ]);
        Section::create([
            'name' => 'Misi',
            'image' => '',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, a officia! Itaque magnam minus aperiam fuga unde, a voluptatibus, eaque dolorum beatae deleniti tempore error tenetur? Doloribus fuga nulla corrupti!',
            'type' => 'info'
        ]);
        Section::create([
            'name' => 'Jurusan',
            'image' => '',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, a officia! Itaque magnam minus aperiam fuga unde, a voluptatibus, eaque dolorum beatae deleniti tempore error tenetur? Doloribus fuga nulla corrupti!',
            'type' => 'info'
        ]);
        
        Section::create([
            'name' => 'Alamat',
            'body' => 'Jl. Soekarno-Hatta No. 211 Leuwipanjang Bandung',
            'type' => 'contact'
        ]);
        Section::create([
            'name' => 'Telepon',
            'body' => '(022)-5230382',
            'type' => 'contact'
        ]);
        Section::create([
            'name' => 'Email',
            'body' => 'info@stmik-mi.ac.id',
            'type' => 'contact'
        ]);
        Section::create([
            'name' => 'Whatsapp',
            'body' => '+62 813-9512-1113',
            'type' => 'contact'
        ]);
    }
}
