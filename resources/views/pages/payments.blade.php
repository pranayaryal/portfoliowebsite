@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/blog">E-commerce</a></li>
        <li class="nav__item--current"><a href="/payments">Payments</a></li>

    </ul>
@stop

@section('content')

    <div class="grid">
        <div class="grid__col--4"></div>
        <div class="grid__col--4">
            <a href="https://paypal.me/pranayaryal" target="_blank">
                <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-large.png"
                     alt="Buy now with PayPal" />
            </a>
        </div>

        <div class="grid__col--4"></div>



    </div>
@stop