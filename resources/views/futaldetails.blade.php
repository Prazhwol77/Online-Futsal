@extends('layout')
@section('home')
<div class="container">
    <h1>Our Futsal</h1>
    <hr/>
    <p>These are the list of the futsal</p>
   <div class="row">
    @foreach ($data as $item)
    <div class="col-md-3 p-2">
    <a href="futsaldetails/{{$item->id}}" style="text-decoration: none;color:black;">
        <div class="card">
            <img src="{{asset('/images/'.$item->image1)}}" style="height: 300px;" class="card-img-top" alt="{{$item->image1}}">
            <div class="card-body">
              <h5 class="card-title">{{$item->FutsalName}}</h5>
              <p class="card-text">price:   {{$item->price}} per hours</p>
              <p class="card-text">Phone Number:   {{$item->PhoneNumber}}</p>
              @role('user')  
              <a href="futsaldetails/{{$item->id}}" class="btn btn-primary w-100">more</a>
              @endrole
              @guest
              <a href="futsaldetails/{{$item->id}}" class="btn btn-primary w-100">more</a>
              @endguest
            </div>
          </div>
    </a>
    </div>
    @endforeach
      
   </div>
</div>





@endsection