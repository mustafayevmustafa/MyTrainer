<?php

namespace Database\Seeders;

use Database\Seeders\Voyager\VoyagerDatabaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(VoyagerDatabaseSeeder::class);
        $this->call(CustomMenuItems::class);
        $this->call(CustomDataTypesSeeder::class);
        $this->call(CustomDataRowsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
