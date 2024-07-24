
@extends('layouts.app')
@section('title','TenisApp-Profile')
@section('class','profile')


@section('content')
    <header>
    <a href="">
        <img src="images/arrow-back.png" alt="">
    </a>
     <img src="images/my-profile-title.png" alt="Logo">
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
        <img src="images/group-user.svg">
        <menu>
            <section>
                
                    <div >
                        <label>
                            <a href="{{url('my-profile')}}">My Profile</a>
                        </label>   
                     </div>

            <div >
                <label>
                    <a href="{{url('dashboard')}}">Dashboard</a>
                </label> 
            </div>
            
                <div >
                    <label>
                        <a href="{{url('welcome')}}">LogOut</a>
                    </label> 
                </div>
        </section>
        </menu>
    </nav>
      
        <div class="edw">
            <img src="images/group-user.svg">
        </div>

        <section>
            <div>
                <p>Name</p>
                <p>ljackson@gmail.com</p>
            </div>
        </section>
           

        <section class="order">
            <div>
                <img src="images/info.png">
            </div>
        </section>

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
          })
      </script>

 @endsection




