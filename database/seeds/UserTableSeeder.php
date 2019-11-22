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
            'email'     => 'admin@codejr.com.br',
            'password' => bcrypt('123456'),
            'permission' => '1',
            'role_id' => '1',
        ]);
        User::updateOrCreate([
            'email' => 'membro@codejr.com.br'
        ], [
            'name'      => 'membro',
            'email'     => 'membro@codejr.com.br',
            'password' => bcrypt('123456'),
            'permission' => '0',
            'role_id' => '1',
        ]);

        factory(App\User::class, 35)->create();
    }
}
