<?php

namespace App\Providers;

use App\Article;
use App\Policies\ArticlePolicy;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Article::class => ArticlePolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate) {
        $this->registerPolicies($gate);

        /*$gate->define('add-article', function (User $user) {

            foreach ($user->roles as $role) {

                if ($role->name == 'Admin') {
                    return true;
                }

            }
            return false;
        });

        $gate->define('update-article', function (User $user, $article) {
            foreach ($user->roles as $role) {
                if ($role->name == 'Admin') {
                    if ($user->id == $article->user_id) {
                        return true;
                    }
                }
            }
            return false;
        });*/

    }
}
