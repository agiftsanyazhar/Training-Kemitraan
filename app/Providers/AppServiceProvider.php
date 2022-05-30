<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('Admin', function(User $user){         
            return $user->role === 'Admin';
        });
        Gate::define('Principal', function(User $user){         
            return $user->role === 'Principal';
        });
        Gate::define('Distributor', function(User $user){         
            return $user->role === 'Distributor';
        });
        Gate::define('Agen', function(User $user){         
            return $user->role === 'Agen';
        });
        Gate::define('Reseller', function(User $user){         
            return $user->role === 'Reseller';
        });
        Gate::define('Dropshipper', function(User $user){         
            return $user->role === 'Dropshipper';
        });
    }
}
