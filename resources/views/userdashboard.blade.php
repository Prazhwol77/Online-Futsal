<x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-500 leading-tight text-center">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>
    @role('user')
    <section class="bg-white" style="padding-top: 25px;padding-bottom: 25px;">
        @foreach($post as $posts)
    <div class="container-fluid top-container">
<div class="row">
   
    <div class="col-12 col-md-6 col-xl-4 offset-xl-2">
        <div class="img-container"><img id="expandedImg" class="rounded" style="width: 100%;" src="{{asset('images/'.$posts->image1)}}" />
            <div id="imgtext"></div>
        </div>

        <div class="row img-row" style="padding-right: 10px;padding-left: 10px;">
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image1)}}" alt="image 1" onclick="myFunction(this);" /></div>
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image2)}}" alt="image 2" onclick="myFunction(this);" /></div>
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image3)}}" alt="image 3" onclick="myFunction(this);" /></div>
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image4)}}" alt="image 4" onclick="myFunction(this);" /></div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-xl-4 offset-xl-0">

        <h1>{{ $posts->FutsalName}}</h1>
        

        <h2>NPR {{ $posts->price }}</h2><p>per hour</p>
        <h3>Description:</h3><p style="font-size: 20px;">{{ $posts->description }}</p>
        <h3></h3><p style="font-size: 20px;"></p>
        <ul>
            <li>Address: {{ $posts->address }}<br /></li>
            <li>City: {{ $posts->City }}<br /></li>
            <li>State: {{ $posts->State }}<br /></li>
            <li>Phone Number: {{ $posts->PhoneNumber }}<br /></li>
            <li>Zip Code: {{ $posts->ZipCode }}<br /></li>
            <li>Email:<br /></li>
        </ul>
        
    </div>
</div>
</div>
<div><div class="container-fluid top-container">
<div class="row">
   
    <div class="col-12 col-md-6 col-xl-4 offset-xl-2">
        <div class="img-container"><img id="expandedImg" class="rounded" style="width: 100%;" src="{{asset('images/'.$posts->image1)}}" />
            <div id="imgtext"></div>
        </div>

        <div class="row img-row" style="padding-right: 10px;padding-left: 10px;">
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image1)}}" alt="image 1" onclick="myFunction(this);" /></div>
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image2)}}" alt="image 2" onclick="myFunction(this);" /></div>
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image3)}}" alt="image 3" onclick="myFunction(this);" /></div>
            <div class="col column"><img class="img-thumbnail img-fluid" src="{{asset('images/'.$posts->image4)}}" alt="image 4" onclick="myFunction(this);" /></div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-xl-4 offset-xl-0">

        <h1>{{ $posts->FutsalName}}</h1>
        

        <h2>NPR {{ $posts->price }}</h2><p>per hour</p>
        <h3>Description:</h3><p style="font-size: 20px;">{{ $posts->description }}</p>
        <h3></h3><p style="font-size: 20px;"></p>
        <ul>
            <li>Address: {{ $posts->address }}<br /></li>
            <li>City: {{ $posts->City }}<br /></li>
            <li>State: {{ $posts->State }}<br /></li>
            <li>Phone Number: {{ $posts->PhoneNumber }}<br /></li>
            <li>Zip Code: {{ $posts->ZipCode }}<br /></li>
            <li>Email:<br /></li>
        </ul>
        
    </div>
</div>
</div>
<div>
@endforeach
</section>
@endrole
</x-app-layout>  