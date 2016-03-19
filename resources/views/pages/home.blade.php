
@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item--current"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/ecommerce">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>
        <li class="nav__item"><a href="/blog">Blog</a></li>

    </ul>
@stop

@section('content')


    <div class="grid">
        <div class="grid__col--4">
            <a href="https://www.coolframes.com" target="_blank">
                <img class="img--wrap" src="img/coolframes.png" alt="Avatar">
            </a>
            <p class="para">An ecommerce website</p>
        </div>

    </div>
    <div class="grid">

        <div class="grid__col--4">

            <p class="para">A Simple Sketching App (jquery)</p>
        </div>


    </div>

    <div class="grid">
        <div class="grid__col--4">
            <a href="https://rpubs.com/probability" target="_blank">
                <img class="img--wrap" src="img/rpubs.png" alt="sample image">
            </a>
            <p class="para">Some Statistics(R programming)</p>
        </div>
        <div class="grid__col--4">
            <a href="http://pranayaryal.github.io/HTMLforms" target="_blank">
                <img class="img--wrap" src="img/form.png" alt="sample image">
            </a>
            <p class="para">A Simple HTML form</p>
        </div>
    </div>





@stop