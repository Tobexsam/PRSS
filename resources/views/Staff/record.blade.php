@extends('layouts.StaffDash')



@section('content')

    <div>
        <h1>Staff | Records</h1>
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





                                @foreach($user as $record)

                                    <div class="column">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="thumbnail">
                                                {{--<img class="img-responsive" height="20" width="20" src="{{"$patient->photo? $patient->photo:'no patient photo'" }}" alt=""></td>--}}
                                                <img class="img-responsive"src="/images/{{"$record->file? $record->file:'no photo'" }}" alt="">
                                                <div class="caption">
                                                    <h3>{{$record->name}}</h3>
                                                    <p>Upload Date: {{$record->created_at->diffForHumans()}}</p>
                                                    <p><a href="#" class="btn btn-primary" role="button">Download</a> <a href="#" class="btn btn-default" role="button">Update</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach


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