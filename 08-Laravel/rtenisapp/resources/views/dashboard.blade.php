@extends('layouts.app')
@section('title', 'TenisApp-Dashboard')
@section('class', 'dashboard')

@section('content')
    <header>
        
        <img src="images/dashboard-title.png" alt="Logo">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>
    @include('menuburguer')
    <section>
        <article class="module module-users">
            <aside>
                <img src="{{asset('images/icon-users.svg')}}" alt="Users Module">
                <span class="rows">20 Rows</span>
            </aside>
            <h3>Module:USERS</h3>
            <a href="{{url('users')}}" class="btn-more">
                View
            </a>
        </article>
        <article>
            <aside>
                <img src="images/ico-brands.svg" alt="Users">
                <span class="rows">6 Rows</span>
            </aside>
            <h3>Module:BRANDS</h3>
            <a href="">
                View
            </a>
        </article>
        <article>
            <aside>
                <img src="images/ico-categories.svg" alt="Users">
                <span class="rows">6 Rows</span>
            </aside>
            <h3>Module:CATEGORIES</h3>
            <a href="">
                View
            </a>
        </article>
        <article>
            <aside>
                <img src="images/ico-tenis.svg" alt="Users">
                <span class="rows">40 Rows</span>
            </aside>
            <h3>Module:TENIS</h3>
            <a href="tenis.html">
                View
            </a>
        </article>
    </section>
@endsection

@section('js')
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // - - - - - - - - - - - - - - - 
            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
            // - - - - - - - - - - - - - - - 
            $togglePass = false
            $('section').on('click', '.ico-eye', function() {

                !$togglePass ? $(this).next().attr('type', 'text') :
                    $(this).next().attr('type', 'password')

                    !$togglePass ? $(this).attr('src', 'images/ico-eye-close.svg') :
                    $(this).attr('src', 'images/ico-eye.svg')

                $togglePass = !$togglePass
            })
            // - - - - - - - - - - - - - - - 
            $('.border').click(function(e) {
                $('#photo').click()
            })
            $('#photo').change(function(e) {
                e.preventDefault()
                let reader = new FileReader()
                reader.onload = function(evt) {
                    $('#upload').attr('src', event.target.result)
                }
                reader.readAsDataURL(this.files[0])
            })
        })
    </script>
@endsection
