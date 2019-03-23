@extends('layouts.login')



@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center"><span class="glyphicon glyphicon-lock"></span> Admin Login</h3>
                    </div>
                    <div class="panel-body">

                        @if (session()->get('message'))
                            <div class="alert alert-{{session()->get('alert')}} alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session()->get('message')}}
                            </div>
                        @endif

                        <div class="panel-body">
                            {!! Form::open( ['method'=>'POST','action'=>'loginController@login']) !!}


                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('name','Chose Role:') !!}--}}
                                {{--{!! Form::select('role', array(''=>'Choose Role','Administrator' => 'Administrator',  'CLO' => 'CLO'),--}}
                                 {{--null,['class'=> 'form-control']) !!}--}}
                            {{--</div>--}}
                            <div class="form-group">
                                {!! Form::label('name','Username:') !!}
                                {!! Form::text('username', null, ['class'=> 'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('name','Password:') !!}
                                {!! Form::password('password', ['class'=> 'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Login ',['class'=> 'btn btn-success pull-right']) !!}
                            </div>

                            {!! Form::close() !!}


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
        </div>


    </div>





@endsection