
@extends('layouts.app')
@section('title','TenisApp-Welcome')
@section('class','welcome')

@section('content')
<header>
    <img src="images/logo-welcome.png" alt="Logo">
    </header>
    <section class="owl-carousel owl-theme" id="my-list">
        <img src="{{asset('images/slide-01.png')}}" alt="slide-01">
        <img src="{{asset('images/slide-01.png')}}" alt="slide-01">
        <img src="{{asset('images/slide-01.png')}}" alt="slide-01">
          
    </section>
    <footer>
        <a href="{{url('catalogue')}}" alt="Explore">
            <img src="images/content-btn-enter.png" alt="Explore">
        </a>
    </footer>
@endsection

@section('js')
<script>
     $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                }
                
                
            }
         })
     })
</script>
@endsection


