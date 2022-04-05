<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Permission;
use App\Models\User;
use App\Policies\OrderPolicy;
use App\Policies\Policy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
//        User::class => Policy::class
//        Order::class => OrderPolicy::class
];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::before(function ($user) {
            if($user->is_supervisor()) return true;
        });

        foreach (Permission::all() as $permission) {

            Gate::define($permission->name, function ($user) use ($permission) {
                return $user->hasPermission($permission);

            });

        }


        //        Gate::define('user', function ($user, $currentuser) {
//            return $user->id == $currentuser->id;
//        });
    }
}
