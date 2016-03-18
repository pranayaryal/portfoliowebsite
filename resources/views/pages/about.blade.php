@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item--current"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/ecommerce">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>

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

    <h4 class="grid">Skills</h4>

    <div class="grid">
        <div class="grid__col--12">
            <a class="btn--warning" href="https://github.com/pranayaryal/projectflyer" target="_blank">LARAVEL FRAMEWORK</a>

            <a class="btn--info" href="https://github.com/pranayaryal/laravelblog" target="_blank">OBJECT-ORIENTED PHP</a>
            <a class="btn--default" href="index.html">HTML5</a>
            <a class="btn--success" href="/about" >CSS3</a>
            <a class="btn--error" href="https://github.com/CodeLouisville/wordgame" target="_blank" >JAVASCRIPT</a>
            <a class="btn--warning" href="http://pranayaryal.github.io/flickr" target="_blank">AJAX</a>
            <a class="btn--info" href="http://pranayaryal.github.io/drawing" target="_blank">JQUERY</a>
            <a class="btn--default" href="http://pranayaryal.github.io/bootstrap" target="_blank">BOOTSTRAP3</a>
            <a class="btn--success" href="http://pranayaryal.github.io/modsass" target="_blank">sass framework</a>
            <a class="btn--error" href="http://pranayaryal.github.io/splom" target="_blank">d3.js</a>
            <a class="btn--warning" href="https://rpubs.com/probability" target="_blank">r programming</a>
            <a class="btn--info" href="https://github.com/pranayaryal/Sunshine/blob/master/app/src/main/java/com/example/android/sunshine/app/ForecastFragment.java" target="_blank">Java</a>
            <a class="btn--success" href="https://github.com/pranayaryal/Sunshine/" target="_blank">android development</a>
            <a class="btn--error" href="http://pranayaryal.github.io/vuejs" target="_blank">vue.js</a>
            <a class="btn--default" href="https://github.com/pranayaryal/phptesting" target="_blank">php unit testing</a>

        </div>
    </div>
@stop
