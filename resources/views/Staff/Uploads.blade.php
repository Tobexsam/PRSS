@extends('layouts.StaffDash')



@section('content')

    <div>
        <h1>Staff | Upload Files</h1>
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
                        {!! Form::open(['method'=>'POST','files'=>true, 'action'=>['StaffController@upload'], 'class'=>'form']) !!}



                        <div class="form-group">
                            {!! Form::label('faculty_id','Select File Name:') !!}
                            <select class="form-control" name="name">
                                {{--@foreach($faculty as $pluck)--}}
                                    <option value="Birth Certificate"> Birth Certificate</option>
                                    <option value="Bsc Certificate"> Bsc Certificate</option>
                                    <option value="Msc Certificate"> Msc Certificate</option>
                                    <option value="Appointment letter"> Appointment letter</option>
                                    <option value="State of Origin"> State of Origin</option>

                                {{--@endforeach--}}
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('name','Image:') !!}
                            {!! Form::file('file')!!}
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