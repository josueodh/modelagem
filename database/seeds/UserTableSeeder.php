<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'email' => 'admin@codejr.com.br'
        ], [
            'name'      => 'Code',
            'last_name' => 'Jr',
            'email'     => 'admin@codejr.com.br',
            'password' => bcrypt('123456'),
        ]);

        factory(App\User::class, 9)->create();
    }
}
