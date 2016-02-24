
@extends('layout')

@section('content')

    <div class="container">
        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>

        <div id="status">
        </div>
    </div>


@stop

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->



