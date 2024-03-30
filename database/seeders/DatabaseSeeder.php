<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Note;
use App\Models\Category;
use Illuminate\Support\Str;


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

        User::create([
            "name" => "Windi siswandi",
            "email" => "windi@gmail.com",
            "password" => bcrypt("admin")
        ]);

        User::create([
            "name" => "Andika Pratama",
            "email" => "andi@gmail.com",
            "password" => bcrypt("andi")
        ]);

        Category::create(["name" => "Task", "slug"=>"task"]);
        Category::create(["name" => "Event", "slug"=>"event"]);
        Category::create(["name" => "Meeting", "slug"=>"meeting"]);

        Note::create([
            "category_id" => 1,
            "user_id" => 1,
            "title" => "Note ke satu",
            "slug" => substr(Str::uuid(), 0, 8),
            "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        ]);

        Note::create([
            "category_id" => 2,
            "user_id" => 1,
            "title" => "Note ke dua",
            "slug" => substr(Str::uuid(), 0, 8),
            "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        ]);

        Note::create([
            "category_id" => 2,
            "user_id" => 2,
            "title" => "Note ke tiga",
            "slug" => substr(Str::uuid(), 0, 8),
            "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        ]);

        Note::create([
            "category_id" => 3,
            "user_id" => 2,
            "title" => "Note ke empat",
            "slug" => substr(Str::uuid(), 0, 8),
            "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        ]);
    }
}
