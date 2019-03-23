@extends('layouts.AdminDash')



@section('content')



    <div class="row">
        <div class="col-lg-12 ">
            <h1 class="page-header">Admin Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="container-fluid">

        @if (session()->get('message'))
            <div class="alert alert-{{session()->get('alert')}} alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session()->get('message')}}
            </div>
        @endif

        <div class="container-fluid col-sm-12">

            <div class="panel panel-success ">
                <div class="panel-heading">
                    <b>Activities</b>
                </div>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Create Research Project</h4>
                            </div>
                            <div class="panel-body">
                                {!! Form::open( ['method'=>'POST','action'=>'ProjectController@createProject']) !!}

                                <div class="form-group">
                                    {!! Form::label('name','Project Name:') !!}
                                    {!! Form::text('project_title', null, ['class'=> 'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!! Form::button('close ',['class'=> 'btn btn-warning pull-right', 'data-dismiss'=> 'modal']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Save ',['class'=> 'btn btn-success pull-right']) !!}
                                </div>

                                {!! Form::close() !!}




                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Allocate Research Members</h4>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control"  placeholder="Enter Project Name " aria-label="...">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">

                        <div class="input-group">

                            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">
                                Setup Project
                            </button>
                            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal2">
                                Allocate Project Members
                            </button>
                            <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal3">
                                Allocate Group Leader
                            </button>
                            </div>
                        </div>

                    </li>

                </ul>

            </div>



        </div>



        <div class="container-fluid col-sm-7">

            <div class="panel panel-info">
                <div class="panel-heading ">
                    <b>Projects Groups</b>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio <a href=""> Review  <span class="badge">1</span></a></li>
                    <li class="list-group-item">Dapibus ac facilisis in <a href=""> Review  <span class="badge">1</span></a></li>
                    <li class="list-group-item">Morbi leo risus <a href=""> Review  <span class="badge">1</span></a></li>
                    <li class="list-group-item">Porta ac consectetur <a href=""> Review  <span class="badge">1</span></a></li>
                    <li class="list-group-item">Vestibulum at eros <a href=""> Review  <span class="badge">1</span></a></li>
                </ul>

            </div>

        </div>


        <div class="container-fluid col-sm-5">

            <div class="panel panel-info">
                <div class="panel-heading ">
                    <b>Research Review(s)</b>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        <a href=""> View All Reviews</a>
                    </li>

                </ul>
            </div>

        </div>


    </div>

    @if(count($errors) > 0)

        <div class="alert alert-danger">

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

@endsection