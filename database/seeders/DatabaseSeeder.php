<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    function __construct() {
        date_default_timezone_set("Asia/Makassar");
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            NoteSeeder::class,
            CategorySeeder::class
        ]);
    }
}
