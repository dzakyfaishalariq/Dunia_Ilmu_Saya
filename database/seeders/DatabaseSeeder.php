<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jenis_soal;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        $data_user = new User();
        $data_jenis_soal = new Jenis_soal();
        // todo membuat data jenis soal
        $data_jenis_soal->create([
            'jenis' => 'Sulit'
        ]);
        $data_jenis_soal->create([
            'jenis' => 'Medium'
        ]);
        $data_jenis_soal->create([
            'jenis' => 'Mudah'
        ]);
        // todo membuat data user yang di tanam sebentar
        $data_user->create([
            // $table->string('nama');
            // $table->string('email')->unique();
            // $table->string('username');
            // $table->string('password');
            'nama' => 'Dzaky Faishalariq',
            'email' => 'dzakyfaishalariq@gmail.com',
            'username' => 'dzaky2727',
            'password' => bcrypt('1234567')
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
