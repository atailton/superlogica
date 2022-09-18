@extends('layouts.layoutAdmin')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>User List</h2>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Zip Code</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($userList as $user)
                            <tr>
                                <td scope="row">{{$user->id}}</td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->zipCode}}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
