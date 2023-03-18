<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Futsal Dashboard') }}
        </h2>
    </x-slot>

        <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as a Futsal !
        </div>-->

            <div class="table-responsive">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                           {{Session::get('success')}}
                    </div>
                    @endif
                <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">FutsalName</th>
                        <th scope="col">address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">PhoneNumber</th>
                        <th scope="col">ZipCode</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->FutsalName}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->City}}</td>
                            <td>{{$item->State}}</td>
                            <td>{{$item->PhoneNumber}}</td>
                            <td>{{$item->ZipCode}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->price}}</td>
                            <td class="">
                                <div class="d-flex">
                                    <a href="/editfutsal/{{$item->id}}"><button class="btn btn-secondary me-2">Edit</button></a>
                                </div>
                                </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
                </div>
</x-app-layout>
