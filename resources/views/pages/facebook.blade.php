
@extends('layout')

@section('content')

    <div class="grid">

        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>

        <p id="status">
        </p>

        <a href="#" onclick="FB.logout()">Logout</a>
    </div>


@stop

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->



