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
        \Eloquent::unguard();

        $path = 'storage/seeder/treehouse.sql';
        \DB::unprepared(file_get_contents($path));
        $this->command->info('Country table seeded!');
    }
}
