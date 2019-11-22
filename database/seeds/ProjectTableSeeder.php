<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Project::class, 50)->create();
        $project = Project::all();
        App\User::all()->each(function ($user) use ($project) {
            $user->project()->attach(
                $project->random(rand(1, 4))->pluck('id')->toArray()
            );
        });
    }
}
