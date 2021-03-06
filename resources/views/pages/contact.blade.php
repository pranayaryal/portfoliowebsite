
@extends('layout')

@section('nav')
    <ul class="nav is-collapsed-mobile">
        <li class="nav__item"><a href="/">Portfolio</a></li>
        <li class="nav__item"><a href="/about">About</a></li>
        <li class="nav__item--current"><a href="/contact">Contact</a></li>
        <li class="nav__item"><a href="/ecommerce">E-commerce</a></li>
        <li class="nav__item"><a href="/payments">Payments</a></li>
        <li class="nav__item"><a href="/blog">Blog</a></li>

    </ul>
@stop

@section('content')



    <div class="grid">
        <div class="grid__col--3"></div>
        <div class="grid__col--6">
            <h4 class="grid">contact form</h4>
            <form class="form" action="/contact" method="post">
                {{csrf_field()}}
                <label class="form__label--hidden{{ $errors->has('name') ? ' has-error' : '' }}" for="name" >Name:</label>
                <input class="form__input" type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name" required>

                <label class="form__label--hidden{{ $errors->has('email') ? ' has-error' : '' }}" for="email">Email:</label>
                <input class="form__input" type="email" id="email" name="email" placeholder="email@website.com" required>

                <label class="form__label--hidden{{ $errors->has('comments') ? ' has-error' : '' }}" for="msg">Comments:</label>
                <textarea class="form__input" id="comments" name="comments" rows="7" placeholder="Comments" required></textarea>

                <input class="btn--default" type="submit" value="Send">
            </form>
        </div>
        <div class="grid__col--6"></div>
    </div>
@stop

