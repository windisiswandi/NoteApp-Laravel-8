<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        // User::create([
        //     "name" => "Windi siswandi",
        //     "email" => "windi@gmail.com",
        //     "password" => bcrypt("admin")
        // ]);

        // User::create([
        //     "name" => "Andika Pratama",
        //     "email" => "andi@gmail.com",
        //     "password" => bcrypt("andi")
        // ]);
    }
}
