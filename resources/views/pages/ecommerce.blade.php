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
            <p>I created this drawing app. Do you want to buy it?</p>
            <a href="http://pranayaryal.github.io/drawing" target="_blank">
                <img class="img--wrap" src="img/pic.png" alt="Avatar">
            </a>
            <a class="btn--success" href="#" >Add to Cart</a>
            <a class="btn--info" href="#" >Wish List</a>



        </div>
        <div class="grid__col--4">
            <p>Or this form I created?</p>
            <a href="http://pranayaryal.github.io/HTMLform" target="_blank">
                <img class="img--wrap" src="img/form.png" alt="Avatar">
            </a>
            <a class="btn--success" href="#" >Add to Cart</a>
            <a class="btn--info" href="#" >Wish List</a>
        </div>
        <div class="grid__col--4">
            <svg width="50" height="50">
                <circle cx="25" cy="25" r="25" fill="purple" />
            </svg>
        </div>


    </div>

@stop