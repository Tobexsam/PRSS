@extends('layouts.AdminDash')



@section('content')

    <div>
        <h1>Admin | Add Staff</h1>
    </div>
    <hr>

    <br><br><br>
    <div class="container margin">


        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                {{--<div class="login-panel panel panel-default">--}}
                @if (session()->get('message'))
                    <div class="alert alert-{{session()->get('alert')}} alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="panel-body">


                    <div class="panel-body">


{{--, 'action'=>['AdminController@AddDoctor']--}}
                        {!! Form::open(['method'=>'POST','files'=>true,'action'=>['StaffController@store'], 'class'=>'form']) !!}

                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('name','Select Specialization:') !!}--}}
                            {{--<select class="form-control" name="specialization">--}}
                                {{--@foreach($plucked as $pluck)--}}
                                    {{--<option value="{{$pluck->specialization}}"> {{$pluck->specialization}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<form class="form-inline">--}}

                        <div class="form-group">
                            {!! Form::label('name','Photo:') !!}
                            {!! Form::file('image')!!}
                        </div>

                        <div class="form-group">
                            {!! Form::text('file_no',$pin, ['class'=> 'form-control','placeholder'=>'File Number '])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('faculty_id','Select Faculty:') !!}
                            <select class="form-control" name="faculty">
                                @foreach($faculty as $pluck)
                                    <option value="{{$pluck->name}}"> {{$pluck->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('department_id','Select Faculty:') !!}
                            <select class="form-control" name="department">
                                @foreach($department as $pluck)
                                    <option value="{{$pluck->name}}"> {{$pluck->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            {!! Form::text('firstname', null, ['class'=> 'form-control','placeholder'=>'First Name '])!!}
                        </div>


                        <div class="form-group">
                            {!! Form::text('lastname', null, ['class'=> 'form-control','placeholder'=>'Last Name'])!!}
                        </div>

                        <div class="form-group">

                            {!! Form::select('sex', array(''=>'Choose Sex','Male' => 'Male', 'Female' => 'Female'),
                            null,['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">

                            {!! Form::select('marital_status', array(''=>'Choose Marital Status','M' => 'Married', 'S' => 'Single' , 'D' => 'Divorced'),
                            null,['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::text('username', null, ['class'=> 'form-control','placeholder'=>'UserName'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::password('password', ['class'=> 'form-control','placeholder'=>"Password"])!!}
                        </div>

                        {!! Form::submit('Submit',['class'=> 'btn  btn-info pull-right','data-title'=>'Add Staff record',
                           'data-message'=>'Are you sure you want to add Record?' ,'data-toggle'=>'confirm']) !!}
                    </div>
                        {!! Form::close() !!}


                    </div>
                </div>

            </div>

        @if(count($errors) > 0)

            <div class="alert alert-danger container-fluid">

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        </div>
    </div>


    {{--</div>--}}





@endsection