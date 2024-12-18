<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard'; // Default redirect path

    /**
     * Determine the redirect path based on the user's role.
     *
     * @return string
     */
    public static function determineRedirectPath(): string
    {
        $user = Auth::user();

        if ($user) {
            if ($user->hasRole('Admin')) {
                return '/admin'; // Redirect Admin to admin dashboard
            }

            if ($user->hasRole('Konsumen')) {
                return '/home'; // Redirect Konsumen to home page
            }
        }

        // Default redirect if no role is assigned
        return self::HOME;
    }

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
