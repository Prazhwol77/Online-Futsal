<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Admin Dashboard') }}
        </h2>

    </x-slot>
    @role('Admin')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold text-lg" style="text-align: center;">Players Details</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show <select class="d-inline-block form-select form-select-sm">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select></label></div>
                </div>
                <div class="col-md-6">
                    <div id="dataTable_filter" class="text-md-end dataTables_filter"><label class="form-label"><input class="form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search" /></label></div>
                </div>
            </div>
            <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                @foreach($posts as $user)   
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email }}</td>
                            <td>{{$user->created_at }}</td>
                            <td>{{$user->updated_at }}</td>
                            <td class="">
                                <div class="d-flex">
                                    <a href="/delete-user/{{$user->id}}"><button class="btn btn-secondary me-2">delete</button></a>
                                </div>
                                </td>
                        </tr>   
                    
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @endrole
</x-app-layout>
