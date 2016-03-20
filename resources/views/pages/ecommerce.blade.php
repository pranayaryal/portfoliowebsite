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
            <p>Price: $50</p>
            <span>Qty</span>
            <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="2">3</option>
                <option value="4">4</option>
            </select>
            <a class="btn--success" href="#" >Add to Cart</a>
            <a class="btn--info" href="#" >Wish List</a>



        </div>
        <div class="grid__col--4">
            <p>Or this form I created?</p>
            <a href="http://pranayaryal.github.io/HTMLform" target="_blank">
                <img class="img--wrap" src="img/form.png" alt="Avatar">
            </a>
            <div class="row">

                <p>Price: $20</p>
                <span>Qty</span>
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="2">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <a class="btn--success" href="#" id="cartadd" data-value="3">Add to Cart</a>
            <a class="btn--info" href="#" >Wish List</a>
        </div>
        <div class="grid__col--4" id="circles">
            <br><br>
            <p class="cartnumber">0</p>

            <p>Item in cart</p>
            <a class="btn--warning" href="#" id="checkout" data-value=[]>Checkout</a>

        </div>

        <script>
            $('#checkout').hide();
            $('#cartnumber').hide();
            $('#cartadd').click(function (e) {
                console.log($(this).data('id'));
                e.preventDefault();
                var text = $.trim($('.cartnumber').text());
                var cartno = parseInt(text);
                $('.cartnumber').html(++cartno);
                $('#checkout').show();
                $('.cartnumber').show();


//

            });
        </script>


    </div>

@stop