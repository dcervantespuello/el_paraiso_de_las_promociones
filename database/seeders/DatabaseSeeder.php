<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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

        User::factory()->create([
            'name' => 'Usuario 1',
            'username' => 'usuario1',
            'email' => 'usuario1@gmail.com',
            'email_verified_at' => '2022-11-22 21:20:48',
            'profile_image' => '202211230306Usuario1.png',
            'password' => '$2y$10$.mUuGWgjdy7YMxBn2Y2q7.w9FnIizlkKVjw9kqFi0FHiblpI2BlGe',
            'created_at' => '2022-11-22 21:19:54',
            'updated_at' => '2022-11-23 03:06:52'

        ]);

        User::factory()->create([
            'name' => 'Usuario 2',
            'username' => 'usuario2',
            'email' => 'usuario2@gmail.com',
            'email_verified_at' => '2022-11-22 21:31:29',
            'profile_image' => '202211230307Usuario2.jpeg',
            'password' => '$2y$10$Fy6lzOqfFLc8GVqDJpSAbe0l1Au1WXLNq/EVBI4CFvVloE04xkiCS',
            'created_at' => '2022-11-22 21:31:06',
            'updated_at' => '2022-11-23 03:07:26'
        ]);

        User::factory()->create([
            'name' => 'Usuario 3',
            'username' => 'usuario3',
            'email' => 'usuario3@gmail.com',
            'email_verified_at' => '2022-11-22 21:46:59',
            'profile_image' => '202211230308Usuario3.png',
            'password' => '$2y$10$L2WoGHMyv6PKCzFiz/yCcO0n6X7dYQIokeWo5fJbkriuy62P623FS',
            'created_at' => '2022-11-22 21:46:39',
            'updated_at' => '2022-11-23 03:08:01'
        ]);
    }
}
