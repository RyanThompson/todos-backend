<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Streams\Core\Support\Facades\Streams;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Streams::factory('todos')->collection(10)->each(
            fn ($entry) => $entry->save()
        );
    }
}
