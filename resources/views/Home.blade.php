@extends('layout')
    @section('home')
    <div id="carousel-1" class="carousel slide center" data-bs-ride="carousel" >
        <div class="carousel-inner" style="height:100vh;">
            <div class="carousel-item active">
                <img class="w-100 d-block" src="{{URL('img/IMG_3044.jpg')}}" alt="Slide Image" />
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="{{ URL('img/logo.png') }}" alt="Slide Image" />
            </div>
            <div class="carousel-item">
                <img class="w-100 d-block" src="img_003.jpg" alt="Slide Image" />
            </div>
        </div>
        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon">
                    
                </span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon">
                    
                </span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
       
    </div>
@endsection
