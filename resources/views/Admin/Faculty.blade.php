@extends('layouts.AdminDash')



@section('content')

    <div class="container">
        <h1>Admin | Add Faculty</h1>
    </div>

    <br><br>
    <br>  <br><br>




    <div class="container margin">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="">

                    @if (session()->get('message'))
                        <div class="alert alert-{{session()->get('alert')}} alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{session()->get('message')}}
                        </div>
                    @endif

                    <div class="panel panel-default">



                        <div class="panel-body">


                        {!! Form::open(['method'=>'POST','action'=>'FacultyController@store','files'=>true]) !!}


                        <div class="form-group">
                            {!! Form::text('name', null, ['class'=> 'form-control','placeholder'=>'Enter Faculty Name'])!!}
                        </div>

                        <div class="form-group">

                            {{--{!! Form::submit('Submit ',['class'=> 'btn btn-primary pull-right']) !!}--}}
                            {!! Form::submit('Submit',['class'=> 'btn  btn-info pull-right','data-title'=>'Add Faculty',
    'data-message'=>'Are you sure you want to add Faculty ?' ,'data-toggle'=>'confirm']) !!}
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
    </div>

    <br>

    <div class="panel-body container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    {{--<th>#</th>--}}
                    <th>Id</th>
                    <th>Faculty Name</th>
                    <th>Action</th>

                </tr>
                </thead>



                <tbody>
                @foreach($faculty as $fac)
                <tr class="odd gradeX">

                    <td class="center">{{$fac->id}}</td>
                    <td class="center">{{$fac->name}}</td>
                    {{--<td class="center">{{$spec->created_at}}</td>--}}
                    {{--<td class="center">{{$spec->updated_at}}</td>--}}
                    <td class="center">
                        <a href = "" class = "btn btn-sm btn-warning"  data-title="Update Record" data-message="Are you sure you want to update Record?" data-toggle="confirm" ><span class = "glyphicon glyphicon-pencil"></span> Update </a>
                    </td>

                </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>
    </div>





@endsection