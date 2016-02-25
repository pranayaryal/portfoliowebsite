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

    Route::post('/contact', 'PagesController@contact');


    Route::get('/facebook', 'FacebookController@fblogin');



    Route::get('/blog', function () {
        return view('pages.blog');
    });

    Route::get('/blog2', function () {
        return view('pages.blog2');
    });

    Route::get('/payments', function ()
    {
        return view('pages.payments');
    });

//   Route::get('/facebook', function ()
//   {
//       return view('pages.facebook');
//   });


    //Social login
    Route::get('/login/{provider?}', 'FacebookController@getSocialAuth');
    Route::get('/login/callback/{provider?}', 'FacebookController@getSocialAuthCallback');


