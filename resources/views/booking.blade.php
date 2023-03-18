@extends('layout')
@section('home')
<div class="container">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/css/lightpick.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
			
    <div class="checkout pt-md-5">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-white"> Order Details</h2>
                    <div class="card" style="width: 20rem;">
                        <div class="image_container">
                            <img src="{{asset('images/'.$course->image1)}}" class="card-img-top"tyle="width: 100%;height:200px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$course->FutsalName}}</h5>
                            <p class="card-text">Rs. {{$course->price}}</p>
                            <p class="card-text">{{$course->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" >
                    <h2 class="text-white">Pay With </h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <form action="https://uat.esewa.com.np/epay/main" method="POST">
                    
                                <input value="{{$course->price}}" name="tAmt" type="hidden">
                                <input value="{{$course->price}}" name="amt" type="hidden">
                                <input value="0" name="txAmt" type="hidden">
                                <input value="0" name="psc" type="hidden">
                                <input value="0" name="pdc" type="hidden">
                                <input value="epay_payment" name="scd" type="hidden">
                                <input value="{{$order->InvoiceNo}}" name="pid" type="hidden">
                                <input value="{{route('esewa.success')}}" type="hidden" name="su">
                                <input value="{{route('esewa.fail')}}" type="hidden" name="fu">
                                <input type="image" style="background-color: darkgoldenrod;" src="{{asset('images/esewa_logo.png')}}" alt="Submit" class="img">
                            </form>
                        </li>
                        </ul>
                   </div>

                </div>

            </div>
        </div>
    </div>

    <script src={{ asset('/jquery.min.js') }}></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src={{ asset('/smart-forms.min.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src={{ asset('/datepicker.js') }}></script>
@endsection