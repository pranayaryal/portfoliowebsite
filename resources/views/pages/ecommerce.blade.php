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

        {{--<div class="grid__col--6">--}}
            {{--<form class="form" action="/ecommerce" method="post">--}}
                {{--{{ csrf_field() }}--}}
                {{--<label class="form__label{{ $errors->has('name') ? ' has-error' : '' }}" for="name" >Product Name:</label>--}}
                {{--<input class="form__input" type="text" id="name" name="product_name" value="{{ old('product_name') }}"  required>--}}

                {{--<label class="form__label{{ $errors->has('email') ? ' has-error' : '' }}" for="email">Product Price:</label>--}}
                {{--<input class="form__input" type="text" id="price" name="price"  required>--}}


                {{--<input class="btn--default" type="submit" value="Save">--}}
            {{--</form>--}}
        {{--</div>--}}


        <div class="row">

                @foreach ($products as $product)
                <div class="grid__col--3">
                    <p>{{ $product->product_name }}</p>
                    <img class="img--wrap" src={{ $product->image_path }} alt="sample image">
                    <p class="para">Price: ${{ $product->price }}</p>
                    <a href="#">Add to Cart</a><br>
                    <a href="#">Add to Wish List</a>
                </div>
                @endforeach

        </div>





    </div>
    <div class="grid">
        <p class="para">Note: Randomly generated names and price</p>
    </div>


@stop