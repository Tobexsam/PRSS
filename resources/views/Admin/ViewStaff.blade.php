@extends('layouts.AdminDash')



@section('content')

    <div class="container">
        <h1>Admin | Staff Records</h1>
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

        <a href="/admin/add_staff_record" id = "show_itr" class = "btn btn-info"><span class = "glyphicon glyphicon-plus"></span> ADD STAFF</a>
        <br />
        <br />
        <div class="table-responsive">

            <table class="table table-striped " id="dataTables-example">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Sex</th>
                    <th>Department</th>
                    <th>Date Created</th>
                    <th>Action</th>

                </tr>
                </thead>



                <tbody>
                @foreach($staff as $staffs)
                    <tr class="odd gradeX">
                        <td class="center"> <img class="img-responsive" height="50" width="50" src="/Staff/{{"$staffs->image? $staffs->image:'no photo'" }}" alt=""></td>
                        <td class="center">{{$staffs->name}}</td>
                        <td class="center">{{$staffs->sex}}</td>
                        <td class="center">{{$staffs->department}}</td>
                        <td class="center">{{$staffs->created_at}}</td>

                        <td>
                            <center> <a href = "/admin/view_records/{{$staffs->id}}" class = "btn btn-sm btn-info"><span class = "glyphicon glyphicon-on"></span> View Record </a>
                                <a href = "" class = "btn btn-sm btn-warning"><span class = "glyphicon glyphicon-pencil"></span> Update </a>
                                <a href = "?" class = "btn btn-sm btn-danger " data-title="Delete Staff Record" data-message="Are you sure you want to delete Staff Record?" data-toggle="confirm" >
                                    <span class = "glyphicon glyphicon-trash"></span> Delete </a></center>
                        </td>



                        {{--<td class="center"> <a href="/admin/specialization_delete/{{$spec->id}}">Delete</a> </td>--}}
                        {{--<td class="center"> {{ link_to('/admin/specialization_delete/'.$spec->id, $title ="Delete", $attributes = ['data-title'=>'Delete Specialization',--}}
    {{--'data-message'=>'Are you sure you want to delete Specialization?' ,'data-toggle'=>'confirm'], $secure = null)}} </td>--}}
                        {{--<td class="center ">--}}
                            {{--<a href = "" class = "btn btn-sm btn-warning"> Update <span class = "badge"></span></a>--}}
                           {{--{{ link_to('/admin/specialization_delete/1', $title ="Delete", $attributes = ['data-title'=>'Delete Staff Record',--}}
                            {{--'data-message'=>'Are you sure you want to delete Staff Record?' ,'data-toggle'=>'confirm'], $secure = null)}}--}}

                        {{--</td>--}}

                    </tr>
                @endforeach

            </table>

        </div>
    </div>
    </div>





@endsection