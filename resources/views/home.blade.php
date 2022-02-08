@extends('layouts.app')

@section('content')
    <div class="banner_section">
        <div class="sextion_banner_text">
            <h1>Nous Sommes Là pour vous</h1>
            <p>Apprenez de nouvelles compétences avec nous, </p>
            <button class="regsiter_button">
                Register
            </button>
        </div>
    </div>
   <h2 class="aboutus_title"></h2>
    <div class="aboutus_section">
        <div class="about_img">
            <img src="{{ asset("images/pp.png") }}" alt="">
        </div>
        <div class="about_desc">
            <h2>IOT-FORMATIONS</h2>
            <p>
                Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. Lorem 
                Ipsum has been the industry's standard 
                dummy text ever since the 1500s, 
                when an unknown printer took a galley 
                of type and scrambled it to make a type 
                specimen book.
            </p>
        </div>
    </div>
    <h2 class="services_title"></h2>
@endsection
