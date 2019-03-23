<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PPRS</title>

    <!-- Core CSS - Include with every page -->
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    {{--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}
    <link href="{{asset('/bootstrap/font-awesome/css/font-awesome.css')}}" rel="stylesheet">




    <!-- Page-Level Plugin CSS - Dashboard -->
    {{--<link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">--}}
    <link href="{{asset('/bootstrap/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">
    <link href="{{asset('/bootstrap/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">



    {{--<link href="css/plugins/timeline/timeline.css" rel="stylesheet">--}}
    <link href="{{asset('/bootstrap/css/plugins/timeline/timeline.css')}}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('/bootstrap/css/sb-admin.css')}}" rel="stylesheet">
    {{--<link href="css/sb-admin.css" rel="stylesheet">--}}

</head>

<body>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Administrator</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->


            <!-- /.dropdown -->
            <li class="dropdown">
                <p class="navbar-text">Signed in as Admin</p>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                    <i class="fa fa-user fa-fw"></i>   <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>


                    <li>
                        <a href="/admin/setup_project"><i class="glyphicon glyphicon-home"></i> Setup Project</a>
                    </li>

                    <li>
                        <a href="/admin/setup_project"><i class="glyphicon glyphicon-home"></i>  Project</a>
                    </li>

                    <li>
                        <a href="/admin/department"><i class="glyphicon glyphicon-home"></i> Allocate Members</a>
                    </li>

                    <li>
                        <a href="/admin/department"><i class="glyphicon glyphicon-home"></i> Reviews</a>
                    </li>

                    <li>
                        <a href="/admin/department"><i class="glyphicon glyphicon-home"></i> Papers</a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">


        @yield('content')

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="{{asset('/bootstrap/js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

<script src="{{asset('/bootstrap/js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="{{asset('/bootstrap/js/sb-admin.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.confirm.js')}}"></script>
<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<script src="{{asset('/bootstrap/js/demo/dashboard-demo.js')}}"></script>


<!-- DataTables JavaScript -->
<script src="{{asset('/bootstrap/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/bootstrap/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>

@yield('footer')

</body>

</html>