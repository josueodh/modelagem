<?php

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
        $this->call([
            DepartamentTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            WarningTableSeeder::class,
            ClientTableSeeder::class,
            ProjectTableSeeder::class,
            EventTableSeeder::class,
        ]);
    }
}
