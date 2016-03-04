<?php


namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Contracts\Factory as Socialite;
use App\Repositories\UserRepository;
use Illuminate\Auth\AuthManager;


class AuthenticateUser {


    private $users;

    private $socialite;

    private $auth;


    public function __construct(UserRepository $users, Socialite $socialite, AuthManager $auth)
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }


    /**
     * @param boolean $hasCode(if request has 'code')
     */
    public function execute($hasCode)
    {
       if(! $hasCode) return $this->getAuthorizationFirst();


        $user = $this->users->findByUsernameOrCreate($this->getGithubUser());

        $this->auth->login($user);

    }

    private function getAuthorizationFirst()
    {
        return $this->socialite->driver('github')->redirect();
    }

    /**
     * @return \Laravel\Socialite\Contracts\User
     */
    protected function getGithubUser()
    {
        return $this->socialite->driver('github')->user();


    }

}