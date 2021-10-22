@extends('layouts.employer')


@section('content')
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Mederwerkers
                    <a href="{{route('employer.employees.create')}}" class="btn btn-success">Medewerkers toevoegen</a>
                </div>
                <div class="card-body">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive ">

                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phoneNumber}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
