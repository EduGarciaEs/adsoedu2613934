
@extends('layouts.app')
@section('title','TenisApp-Catalogue')
@section('class','catalogue')

@section('content')
<header>
    <a href="" class="">
        <img src="">
    </a>
    <img src="images/logo-top.png" alt="Logo" class="logo-top">
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
        <a href="{{route('login')}}">
            <img src="images/ico-login.svg" alt="Login">
            Login
        </a>
        <a href="{{url('register')}}" >
            <img src="images/ico-register.svg" alt="Register">
            Register
        </a>
        <a href="catalogue.html">
            <img src="images/ico-catalogue.svg" alt="Catalogue">
            Catalogue
        </a>
    </menu>
</nav>
<section class="scroll">
    <form action="" method="post">
        <input type="text" placeholder="Filter" maxlength="18">
    </form>
    <article>
        <h2>
            <img src="images/shoe.png">
            Running
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
        </div>
    </article>
    <article>
        <h2>
            <img src="images/shoe.png" alt="Category">
            Urban
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
        </div>
    </article>
    <article>
        <h2>
            <img src="images/shoe.png" alt="Category">
            Newest
        </h2>
        <div class="owl-carousel owl-theme">
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
            <figure>
                <img src="images/vaporfly-3.png" alt="" class="slide">
                <figcaption>Tenis</figcaption>
                <a href="view-game.html" class="btn-more">
                    <img src="images/ico-more.svg" alt="">
                    view
                </a>
            </figure>
        </div>
    </article>
</section>
@endsection

@section('js')
<script>
     $(document).ready(function () {
            // - - - - - - - - - - - - - - - 
            $('.owl-carousel').owlCarousel({
                center: false,
                loop: true,
                margin: 0,
                nav: true,
                dots: false,
                responsive:{
                    0:{
                        items: 2
                    }
                }
            })
            // - - - - - - - - - - - - - - - 
            $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
            // - - - - - - - - - - - - - - - 
        })
</script>
@endsection



