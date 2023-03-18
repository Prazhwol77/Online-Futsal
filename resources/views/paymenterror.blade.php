@extends('layout')
@section('home')

@if( session('error_message'))
<div class="alert alert-danger">
    {{session('error_message')}}
</div>
@endif
<div class="mt-5">
    <!--disply card -->
    <div class="card p-5 text-center shadow" style="width:400px;margin:0px auto;">
        <h1>Payment couldnot take place!</h1>
        <i class="fa-solid fa-rectangle-xmark fa-5x py-5"></i>
        <!--button -->
        <div class="d-flex justify-content-between">
            <a href="/">
                <button type="submit" class="btn btn-secondary"><i class="fa fa-left-long pe-3"></i>Back to Home</button>
            </a>
        </div>
    </div>
</div>



@endsection