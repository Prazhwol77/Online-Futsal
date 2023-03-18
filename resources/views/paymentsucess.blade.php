@extends('layout')
@section('home')
<div class="container pt-1 paymentResponse">
	
   {{-- @if( session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif--}}
    <?php
    use App\Models\Booking;
     $order_data=Booking::find($data);
    ?>
    <div class="mt-5">
        <!--disply card -->
        <div class="card p-5 text-center shadow" style="width:500px;margin:0px auto;">
            <h1>Thanks For Purchasing  Course</h1>
            <i class="fa-solid fa-bag-shopping fa-5x py-5"></i>
            <!--button -->
            <div class="d-flex justify-content-between">
                <a href="">
                    <button type="submit" class="btn btn-secondary"><i class="fa fa-left-long pe-3"></i>Back to Course</button>
                </a>
                <a href="" target="_blank">
                    <button type="submit" class="btn btn-secondary">Payment Details <i class="fa fa-right-long ps-3"></i></button>
                </a>
            </div>
           
        </div>
    </div>

   
</div>
@endsection