

@extends('layouts.app')
@section('title','TenisApp-Login')
@section('class','login')

@section('content')
<header>
    <a href="javascript:;" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/title-login.png" alt="Login">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path
              class="line top"
              d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path
              class="line middle"
              d="m 70,50 h -40" />
        <path
              class="line bottom"
              d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>
<nav class="nav">
        <img src="images/title-menu.svg" alt="Menu" class="title-menu">
        <menu>
            <a href="{{ url('login') }}">
                <img src="images/ico-login.svg" alt="Login">
                Login
            </a>
            <a href="{{ url('register') }}">
                <img src="images/ico-register.svg" alt="Register">
                Register
            </a>
            <a href="{{ url('catalogue') }}">
                <img src="images/ico-catalogue.svg" alt="Catalogue">
                Catalogue
            </a>
        </menu>
    </nav>
<section>
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label>
                <img src="images/ico-email.png" alt="Email">
                Email:
            </label>
            <input type="email" name="email" placeholder="johnwick@gmail.com">
        </div>
        <div class="form-group">
            <label>
                <img src="images/ico-pass.png" alt="Password">
                Password:
            </label>
            <img class="ico-eye" src="images/ico-eye.png" alt="Eye">
            <input type="password" name="password" placeholder="dontmesswithmydog">
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="images/content-btn-login.png" alt="Login">
            </button>
            <a href="">Forgot your password ?</a>
        </div>

    </form>
</section>
</main>

<script src="js/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function () {
    // - - - - - - - - - - - - - - - 
    $('header').on('click', '.btn-burger', function () {
        $(this).toggleClass('active')
        $('.nav').toggleClass('active')
    })
    // - - - - - - - - - - - - - - - 
    $togglePass = false
    $('section').on('click', '.ico-eye', function () {

        !$togglePass ? $(this).next().attr('type', 'text')
                     : $(this).next().attr('type', 'password')
                     
        !$togglePass ? $(this).attr('src', 'images/ico-eye-close.svg')
                     : $(this).attr('src', 'images/ico-eye.svg')

        $togglePass = !$togglePass
    })
    // - - - - - - - - - - - - - - - 
})
</script>
@endsection





