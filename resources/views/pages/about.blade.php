@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item--current"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/blog">Blog</a></li>

    </ul>
@stop

@section('content')
    <div class="grid">
        <div class="grid__col--2">
            <img class="img--avatar" src="img/pranay.jpg" alt="Avatar">
        </div>
        <div class="grid__col--10">
            <p>When I'm not doing web development or web design, I play the guitar, violin and piano and paint </p>
            <div class="centered-grid__col--4">
                <blockquote>"If you are worried about how you look, remember that others are preoccupied by that same thought, and being thus occupied, they might not notice you. So why worry" - Pranay Aryal
                </blockquote>
            </div>

        </div>
    </div>
@stop
