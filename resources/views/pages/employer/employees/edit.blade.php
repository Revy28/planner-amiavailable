@extends('layouts.employer')

@section('content')
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Mederwerkers toevoegen
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            @if(isset($employee))
                                {!! Form::model($employee, ['route' => ['employer.employees.update', $employee], 'method' => 'PUT']) !!}
                            @else
                                {!! Form::open(['route' => 'employer.employees.store']) !!}
                            @endif
                            {!! Form::token() !!}
                            <div class="row">
                                <div class="col">
                                    {!! Form::label('name', 'Naam', ['class' => 'form-label'])!!}
                                    {!! Form::text('name', null,['class' => 'form-control'] ) !!}
                                </div>
                                <div class="col">
                                    {!! Form::label('email', 'E-mail', ['class' => 'form-label'])!!}
                                    {!! Form::text('email', null,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    {!! Form::label('password', 'Wachtwoord', ['class' => 'form-label'])!!}
                                    {!! Form::password('password',['class' => 'form-control'] ) !!}
                                </div>
                                <div class="col">
                                    {!! Form::label('password_confirmation', 'Wachtwoord Herhaling', ['class' => 'form-label'])!!}
                                    {!! Form::password('password_confirmation',['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    {!! Form::label('phoneNumber', 'Telefoonnummer', ['class' => 'form-label'])!!}
                                    {!! Form::text('phoneNumber', null,['class' => 'form-control'] ) !!}
                                </div>
                                <div class="col">
                                    {!! Form::label('dateOfBirth', 'Geboortedatum', ['class' => 'form-label'])!!}
                                    {!! Form::date('dateOfBirth', null,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-end">
                                {!! Form::submit(isset($user) ? 'Werknemer bijwerken' : 'Werknemer aanmaken', ['class' => 'btn  btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
