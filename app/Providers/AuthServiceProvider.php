<?php

namespace App\Providers;

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

        Gate::define('isAdmin', function(User $user){
            if($user->role == 'Admin'){
                return true;
                
            }
            
            else{
                return false;
            }
        });
        
        Gate::define('isStaff', function(User $user){
            if($user->role == 'Staff'){
                return true;
            }else{
                return false;
            }
        });
        
        Gate::define('isBlogger', function(User $user){
            if($user->role == 'Blogger'){
                return true;
            }else{
                return false;
            }
        });
        
        
    }
}
