<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Departament' => 'App\Policies\DepartamentPolicy',
        'App\Warning' => 'App\Policies\WarningPolicy',
        'App\Role' => 'App\Policies\RolePolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Project' => 'App\Policies\ProjectPolicy',
        'App\Category' => 'App\Policies\CategoryPolicy',
    ];


    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
