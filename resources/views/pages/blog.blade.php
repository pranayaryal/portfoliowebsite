@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/ecommerce">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>
        <li class="nav__item--current"><a href="/blog">Blog</a></li>

    </ul>
@stop

@section('content')
    <div class="grid">
        <div class="row">
            <div class="bar-chart">
                <h2>Average Hospital Bill Payments By State(Data from data.gov)</h2>
            </div>
        </div>
        <hr>
        <div class="row"></div>


        <div class="row">
            <h2>Mortality By Race and Disease(Data is from data.gov)</h2>
            <div id="dashboard"></div>
        </div>


    </div>


    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
    <script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
    <script src="/js/data.js"></script>
    <script src="/js/dashboard.js"></script>


@stop