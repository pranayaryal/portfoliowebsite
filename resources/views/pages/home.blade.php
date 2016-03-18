
@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item--current"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/blog">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>

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

        <div class="grid__col--4">
            
        </div>
        <div class="grid__col--4">
            <a href="http://pranayaryal.github.io/datavis" target="_blank">
                <img class="img--wrap" src="img/hospitalCharge.png" alt="sample image">
            </a>
            <p class="para">Hospital Charge Data(Interactive Visualization)(using d3.js)</p>
        </div>





    </div>
    <div class="grid">
        <div class="grid__col--4">
            <a href="http://pranayaryal.github.io/sortedchart" target="_blank">
                <img class="img--wrap" src="img/sortedchart.png" alt="Avatar">
            </a>
            <p class="para">This bar chart can be sorted(d3.js)</p>
        </div>

        <div class="grid__col--4">
            <a href="http://pranayaryal.github.io" target="_blank">
                <img class="img--wrap" src="img/mortd3.png" alt="sample image">
            </a>
            <p class="para">Interactive Visualization using d3.js library</p>
        </div>

        <div class="grid__col--4">
            <a href="http://pranayaryal.github.io/drawing" target="_blank">
                <img class="img--wrap" src="img/pic.png" alt="Avatar">
            </a>
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


    <div class="grid">
        <div class="grid__col--4">
            <img class="img--wrap" src="img/faces.jpg" alt="Avatar">
            <p class="para">A crayon sketch</p>
        </div>
        <div class="grid__col--4">
            <img class="img--wrap" src="img/ships.jpg" alt="sample image">
            <p class="para">Ship </p>
        </div>
        <div class="grid__col--4">
            <img class="img--wrap" src="img/car.jpg" alt="sample image">
            <p class="para">Animal Car</p>
        </div>
    </div>



@stop