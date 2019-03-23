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