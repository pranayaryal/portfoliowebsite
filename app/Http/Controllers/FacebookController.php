<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require_once __DIR__ . '/vendor/autoload.php';

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Facebook\Facebook;

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

}
