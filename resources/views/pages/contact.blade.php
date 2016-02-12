
@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item--current"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/blog">Blog</a></li>

    </ul>
@stop

@section('content')
    <div class="grid">

        <div class="grid__col--3">


        </div>
        <div class="grid__col--6">
            <p>513-785-8193</p>
            <p>drpranayaryal@gmail.com</p>
            <p>@pranayaryal</p>
            <a href="https://github.com/pranayaryal/" target="_blank">GitHub</a>
            <hr>

        </div>
        <div class="grid__col--3">

        </div>

    </div>


    <div class="grid">
        <div class="grid__col--3"></div>
        <div class="grid__col--6">
            <h4 class="grid">contact form</h4>
            <form class="form">
                <label class="form__label--hidden" for="name">Name:</label>
                <input class="form__input" type="text" id="name" placeholder="Name">

                <label class="form__label--hidden" for="email">Email:</label>
                <input class="form__input" type="email" id="email" placeholder="email@website.com">

                <label class="form__label--hidden" for="msg">Message:</label>
                <textarea class="form__input" id="msg" placeholder="Message..." rows="7"></textarea>

                <input class="btn--default" type="submit" value="Submit">
                <input class="btn--warning" type="reset" value="Reset">
            </form>
        </div>
        <div class="grid__col--6"></div>
    </div>
@stop

