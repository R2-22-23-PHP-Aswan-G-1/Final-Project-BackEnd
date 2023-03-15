<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api/instructor.php'))
                ->group(base_path('routes/api/like.php'))
                ->group(base_path('routes/api/order.php'))
                ->group(base_path('routes/api/question.php'))
                ->group(base_path('routes/api/reply.php'))
                ->group(base_path('routes/api/subtrack.php'))
                ->group(base_path('routes/api/user.php'))
                ->group(base_path('routes/api/student.php'))
                ->group(base_path('routes/api/services.php'))
                ->group(base_path('routes/api/skill.php'))
                ->group(base_path('routes/api/testimonial.php'))
                ->group(base_path('routes/api/track.php'))
                ->group(base_path('routes/api/profile.php'))
                ->group(base_path('routes/api/language.php'))
                ->group(base_path('routes/api/postReplay.php'))
                ->group(base_path('routes/api/user.php'))
                ->group(base_path('routes/api/tests.php'))
                ->group(base_path('routes/api/chat.php'))
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
