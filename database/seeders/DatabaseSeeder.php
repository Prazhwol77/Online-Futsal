<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Futsal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        Futsal::factory(10)->create();
    }
}
