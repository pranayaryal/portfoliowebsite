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
        <form action="/cart/add" method="post" id=""checkoutform">
            {{ csrf_field() }}
            <div class="grid__col--4">
                <p>I created this drawing app. Do you want to buy it?</p>
                <a href="http://pranayaryal.github.io/drawing" target="_blank">
                    <img class="img--wrap" src="img/pic.png" alt="Avatar">
                </a>
                <div class="row">
                    <p style="display: inline-block;">Price: $50</p>
                    <span style="display: inline-block;">Qty</span>
                    <select style="display: inline-block;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <button class="btn--success" href="#" type="submit">Add to Cart</button>
                <button class="btn--info" href="#" >Wish List</button>
            </div>

            <div class="grid__col--4">
                <p>Or this form I created?</p>
                <a href="http://pranayaryal.github.io/HTMLform" target="_blank">
                    <img class="img--wrap" src="img/form.png" alt="Avatar">
                </a>
                <div class="row">

                    <p style="display: inline-block;">Price: $20</p>
                    <span style="display: inline-block;"> </span>
                    <span style="display: inline-block;">Qty</span>

                    <select style="display: inline-block;" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="2">3</option>
                        <option value="4">4</option>
                    </select>

                </div>
                <button class="btn--success" href="#" id="cartadd" data-value="3" type="submit">Add to Cart</button>
                <button class="btn--info" href="#" >Wish List</button>
            </div>
            <div class="grid__col--4" id="circles">

            </div>
        </form>


        <script>
//            $('#checkout').hide();
//            $('#cartnumber').hide();
//            $('#cartadd').click(function (e) {
//                e.preventDefault();
//                $('#checkoutform').submit();
//
////
//
//            });
        </script>


    </div>

@stop