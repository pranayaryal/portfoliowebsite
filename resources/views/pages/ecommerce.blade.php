@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item--current"><a href="/blog">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>

    </ul>
@stop

@section('content')
    <div class="grid">
        <p>This is only for testing purposes</p>
    </div>

@stop