<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
            return $user->id_role === 1;
        });
        // Gate::define('Principal', function(User $user){         
        //     return $user->Role === 'Principal';
        // });
        // Gate::define('Distributor', function(User $user){         
        //     return $user->Role === 'Distributor';
        // });
        // Gate::define('Agen', function(User $user){         
        //     return $user->Role === 'Agen';
        // });
        // Gate::define('Reseller', function(User $user){         
        //     return $user->Role === 'Reseller';
        // });
        // Gate::define('Dropshipper', function(User $user){         
        //     return $user->Role === 'Dropshipper';
        // });
    }
}
