
@extends('layouts.app')
@section('title','TenisApp-Register')
@section('class','login')

@section('content')
        <header>
            <a href="javascript:;" class="btn-back">
                <img src="images/btn-back.svg" alt="Back">
            </a>
            <img src="images/title-register.png" alt="Login">
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
        <section class="scroll">
            <form action="{{route('dashboard')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <img id="upload" class="mask" src="images/bg-upload-photo.svg" alt="Photo">
                    <img class="border" src="images/shape-border.svg" alt="border" >
                    <input id="photo" type="file" name="photo" accept="image/*">
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-email.png" alt="Text">
                        Full Name:
                    </label>
                    <input type="text" name="fullname" placeholder="John Wick">
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-email.png" alt="Email">
                        Document:
                    </label>
                    <input type="number" name="document" placeholder="987654321">
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-email.png" alt="Number">
                        Phone Number:
                    </label>
                    <input type="number" name="phone" placeholder="3101231231">
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-pass.png" alt="Text">
                        Birthdate:
                    </label>
                    <input type="date" name="birthdate" placeholder="dd/mm/aa">
                </div>

                <div class="form-group">
                    <label>
                        <img src="images/ico-email.png" alt="Text">
                        Gender:
                    </label>
                    <input type="text" name="gender" placeholder="M-F">
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-email.png" alt="E-mail">
                        Email:
                    </label>
                    <input type="email" name="email" placeholder="Johnwick@gmail.com">
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-pass.png" alt="Text">
                        Password:
                    </label>
                    <input type="password" name="email" placeholder="dontmessmydog">
                </div>
                <div class="form-group">
                    <button type="submit">
                        <img src="images/content-btn-login.png" alt="Login">
                    </button>
                </div>
            </form>
        </section>
    </main>
    @endsection
    @section('js')
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
            $('.border').click(function (e) {
                $('#photo').click()
            })
            $('#photo').change(function(e){
                e.preventDefault()
                let reader= new FileReader()
                reader.onload=function(evt) {
                    $('#upload').attr('src',event.target.result)
                }
                reader.readAsDataURL(this.files[0])
            })
        })
    </script>
    @endsection
        
