<?php

use Illuminate\Database\Seeder;

class WarningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Warning::class, 9)->create();
    }
}
