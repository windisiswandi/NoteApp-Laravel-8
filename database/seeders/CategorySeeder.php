<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(3)->create();
        // Category::create(["name" => "Task", "slug"=>"task"]);
        // Category::create(["name" => "Event", "slug"=>"event"]);
        // Category::create(["name" => "Meeting", "slug"=>"meeting"]);
    }
}
