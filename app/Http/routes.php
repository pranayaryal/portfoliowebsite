<?php


use App\Http\Flash;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/', function () {

        return view('pages.home');
    });
    Route::get('/about', function () {
        return view('pages.about');
    });

    Route::get('/contact', function () {
        return view('pages.contact');
    });

    Route::get('/blog', function () {
        return view('pages.blog');
    });

    Route::post('/contact', 'PagesController@contact');


    Route::get('/facebook', 'FacebookController@fblogin');



    Route::get('/ecommerce', function () {
        return view('pages.ecommerce');
    });

    Route::get('/blog2', function () {
        return view('pages.blog2');
    });

    Route::get('/payments', function ()
    {
        return view('pages.payments');
    });

    Route::post('/cart/add', function (Request $request)
    {
        var_dump("Congratulations you clicked " . $request['item']);

    });

//   Route::get('/facebook', function ()
//   {
//       return view('pages.facebook');
//   });


    //Social login
//    Route::get('/login/{provider?}', 'FacebookController@getSocialAuth');
//    Route::get('/login/callback/{provider?}', 'FacebookController@getSocialAuthCallback');
//
//    Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
//    Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');




//    Route::get('/', function ()
//    {
//        if (Auth::check())
//        {
//            return 'Welcome back, ' . Auth::user()->username;
//        }
//
//        return 'Hi Guest. ' . link_to('login', 'Login with Github');
//    });
//
//    Route::get('login', 'AuthController@login');

