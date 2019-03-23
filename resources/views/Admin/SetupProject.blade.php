@extends('layouts.AdminDash')



@section('content')
<br>
    <div>
        <h1>Admin | Setup Project</h1>
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

                        {!! Form::open(['method'=>'POST','files'=>true,'action'=>['ProjectController@createProject'], 'class'=>'form']) !!}


                        <div class="form-group">
                            {!! Form::text('project_title', null, ['class'=> 'form-control','placeholder'=>'Enter project title '])!!}
                        </div>

                        {!! Form::submit('Submit',['class'=> 'btn  btn-info pull-right','data-title'=>'Add project title',
                           'data-message'=>'Are you sure you want to add Record?' ,'data-toggle'=>'confirm']) !!}
                    </div>
                        {!! Form::close() !!}


                    </div>
                </div>

            <br>

            <div class="panel-body container">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            {{--<th>#</th>--}}
                            <th>Id</th>
                            {{--<th>Faculty Name</th>--}}
                            <th>Project Title</th>
                            <th>Created at</th>
                            <th>Action</th>

                        </tr>
                        </thead>



                        <tbody>
                        @foreach($project as $pro)
                            <tr class="odd gradeX">

                                <td class="center">{{$pro->id}}</td>

                                <td class="center">{{$pro->project_title}}</td>
                                <td class="center">{{$pro->created_at}}</td>
                                <td class="center">
                                    <a href = "" class = "btn btn-sm btn-warning"  data-title="Update Record" data-message="Are you sure you want to update Record?" data-toggle="confirm" ><span class = "glyphicon glyphicon-pencil"></span> Assign leader </a>
                                </td>

                            </tr>


                        @endforeach
                        </tbody>

                    </table>

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