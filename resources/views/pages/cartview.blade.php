@extends('layout')



@section('content')
    <div class="grid">
        <p>Your Cart</p>


        @foreach(Session::get('cart.items') as $item)
            <div class="row">
                {{ $item->product_name }}
                {{$item->price}}
                <a href="/cart/delete/{{$item->product_name}}">Delete</a>
            </div>
        @endforeach



        <a href="/ecommerce">Shop More</a>

    </div>


@stop