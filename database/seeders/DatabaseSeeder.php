<?php

namespace Database\Seeders;

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
        // old syntax
        // factory(App\Post::class, 15)->create();
        \App\Models\Post::factory(15)->create();
    }
}
