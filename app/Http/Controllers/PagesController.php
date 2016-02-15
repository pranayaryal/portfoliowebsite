<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

use Mail;

use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function contact(Request $request)
    {

//        $user = User::findOrFail(3);

        Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('comments')
            ), function($message)
            {
                $message->from('drpranayaryal@gmail.com');
                $message->to('drpranayaryal@gmail.com', 'Admin')->subject('Feedback from a customer');
            });

        dd('your message was sent');
    }
}
