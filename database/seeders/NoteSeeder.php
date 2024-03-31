<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;
use Illuminate\Support\Str;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::factory(8)->create();
        
        // Note::create([
        //     "category_id" => 1,
        //     "user_id" => 1,
        //     "title" => "Note ke satu",
        //     "slug" => substr(Str::uuid(), 0, 8),
        //     "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        // ]);

        // Note::create([
        //     "category_id" => 2,
        //     "user_id" => 1,
        //     "title" => "Note ke dua",
        //     "slug" => substr(Str::uuid(), 0, 8),
        //     "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        // ]);

        // Note::create([
        //     "category_id" => 2,
        //     "user_id" => 2,
        //     "title" => "Note ke tiga",
        //     "slug" => substr(Str::uuid(), 0, 8),
        //     "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        // ]);

        // Note::create([
        //     "category_id" => 3,
        //     "user_id" => 2,
        //     "title" => "Note ke empat",
        //     "slug" => substr(Str::uuid(), 0, 8),
        //     "catatan" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere reiciendis itaque minima exercitationem, assumenda accusantium eos repellat ea quod quibusdam in nam corrupti accusamus nesciunt praesentium, molestias laborum esse consectetur possimus eligendi doloribus. Ut tempora nemo ea, dolor excepturi natus nesciunt temporibus sunt, possimus reprehenderit mollitia animi assumenda quod repellendus."
        // ]);
    }
}
