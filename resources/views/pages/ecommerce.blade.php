@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item--current"><a href="/ecommerce">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>
        <li class="nav__item"><a href="/blog">Blog</a></li>

    </ul>
@stop

@section('content')
    <div class="grid">
        <div class="grid__col--4">
            <p>I created this drawing app and I want to sell it to you</p>
            <a href="http://pranayaryal.github.io/drawing" target="_blank">
                <img class="img--wrap" src="img/pic.png" alt="Avatar">
            </a>
        </div>
        <div class="grid__col--4">
        </div>
        <div class="grid__col--4">
        </div>


    </div>

@stop