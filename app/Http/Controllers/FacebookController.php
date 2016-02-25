<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Facebook\Facebook;
use Laravel\Socialite\Facades\Socialite;


class FacebookController extends Controller
{

    public function fblogin()
    {
        $fb = new Facebook([
            'app_id' => '483716931803149',
            'app_secret' => '5058209626562396a279334245effde4',
            'default_graph_version' => 'v2.5',
        ]);


        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email', 'user_likes'];

        $loginUrl = $helper->getLoginUrl('http://pranayaryal.me/login-callback.php', $permissions);

        return view ('pages.facebook1', compact('loginurl'));
    }

    public function getSocialAuth($provider=null)
    {
        if (!config("services.$provider"))
        {
            abort('404');
        }

        return Socialite::with($provider)->redirect();
    }

    public function getSocialAuthCallback($provider=null)
    {

        if ($user = Socialite::with($provider)->user())
        {
            dd($user);
        } else
        {
            return 'something went wrong';
        }
    }

}
