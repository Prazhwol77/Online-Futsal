<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Futsal Dashboard') }}
        </h2>
    </x-slot>
  <div class="container">
    <div class="rounded-3" style="background-color: #9A86A4; padding: 20px; border-radius: 25px;">
        <form method="post" action="{{route('dashboard.storefutsal')}}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">Add Futsal </h2>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="FutsalName" placeholder="Futsal Name" />
                    @error('FutsalName')
                        <span class="error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class=" col-md-12">
                    <input class="form-control" type="text" name="address" placeholder="Address" style="margin-right: 5px;">
                    @error('address')
                    <span class="error">{{$message}}</span>
                @enderror
                </div>
                   
                
            </div>
            <div class="row">
                <div class=" col-md-6">
                    <input class="form-control" type="text" name="City" placeholder="City"style="margin-right: 5px;">
                    @error('City')
                    <span class="error">{{$message}}</span>
                      @enderror
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="State" placeholder="State" />
                    @error('State')
                    <span class="error">{{$message}}</span>
                      @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="PhoneNumber" placeholder="Phone Number" style="margin-right: 5px;">
                    @error('PhoneNumber')
                    <span class="error">{{$message}}</span>
                      @enderror
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="ZipCode" placeholder="Zip Code" />
                    @error('ZipCode')
                    <span class="error">{{$message}}</span>
                      @enderror
                </div>
                    
                </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <textarea class="form-control" type="description" name="description" placeholder="Description"></textarea>  
                    @error('description')
                    <span class="error">{{$message}}</span>
                      @enderror  
                </div>
                      
            </div>

            <div class="col-md-6">
                    <input class="form-control" type="text" name="price" placeholder="price" />
                    @error('price')
                    <span class="error">{{$message}}</span>
                      @enderror
            
            <select name="futsalnew_id">
                    @foreach($data as $futsals)
                    <option value="{{ $futsals->id }}">
                    {{ $futsals->name }}    
                    </option>

                    @endforeach
                </select>
                    
                    @error('Price')
                    <span class="error">{{$message}}</span>
                      @enderror
                  </div>

            <div class="">
                <div class="file">
                    <label>Choose Images</label>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <input id="upload" class="form-control" type="file" name="image1" />
                            @error('image1')
                            <span class="error">{{$message}}</span>
                              @enderror
                         </div>
                         <div class="col-md-6 mb-3">
                            <input id="upload" class="form-control" type="file" name="image2" />
                            @error('image2')
                            <span class="error">{{$message}}</span>
                              @enderror
                         </div>
                         <div class="col-md-6">
                            <input id="upload" class="form-control" type="file" name="image3" />
                            @error('image3')
                            <span class="error">{{$message}}</span>
                              @enderror
                         </div>
                         <div class="col-md-6">
                            <input id="upload" class="form-control" type="file" name="image4" />
                            @error('image4')
                            <span class="error">{{$message}}</span>
                              @enderror
                         </div>
                    </div>
                     
                </div>
            </div>
            <div class="mb-3 rounded-pill px-2"><button class="btn btn-primary d-block w-100" type="submit" action method="post">Add Futsal</button></div>
        </form>
    </div>
  </div>
</x-app-layout>
