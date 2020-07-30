<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Answer;
use App\Policies\AnswerPoilicy;
use App\Question;
use App\Policies\QuestionPoilicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Answer::class => AnswerPoilicy::class,
        Question::class => QuestionPoilicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        \Gate::define('update-question', function($user, $question){
            return $user->id == $question->user_id;
        });
        
        \Gate::define('delete-question', function($user, $question){
            return $user->id == $question->user_id;
        });
    }
}
