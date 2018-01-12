<?php

namespace App\Providers;

use App\Project;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->registerDocumentaiPolices();
    }

    public function registerDocumentaiPolices()
    {
        Gate::define('master', function ($user) {
            return $user->inRole('master');
        });

        Gate::define('see-project', function ($user, Project $project) {
            return $user->inRole('master') or $user->project_id == $project->id;
        });
    }
}
