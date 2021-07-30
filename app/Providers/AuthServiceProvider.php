<?php

namespace App\Providers;

use App\Conversation;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Authorization
        // Gate::before(function (User $user) {
        //     if ($user->id === 13) {
        //         return true;
        //     }
        // });

        // roles and abilities
        Gate::before(function ($user, $ability) {
            if ($user->abilities()->contains($ability)) {
                return true;
            }
        });
    }
}
