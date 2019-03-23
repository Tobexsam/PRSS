<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PRSS-login</title>

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
        <header>
            <nav class="navbar-primary  navbar-static-top  header-position" role="navigation">
                <h3 class=" text-center" >PROJECT RESEARCH SHARING SYSTEM</h3>
            </nav>
        </header>
    </nav>
    <header>



    </header>

</div>
<!-- /#page-wrapper -->
@yield('content')

<!-- /#wrapper -->

{{--<!-- Core Scripts - Include with every page -->--}}
<script src="{{asset('/bootstrap/js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/bootstrap/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>



<!-- SB Admin Scripts - Include with every page -->
<script src="{{asset('/bootstrap/js/sb-admin.js')}}"></script>
<script src="{{asset('/bootstrap/js/bootstrap.confirm.js')}}"></script>
<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<script src="{{asset('/bootstrap/js/demo/dashboard-demo.js')}}"></script>


<!-- DataTables JavaScript -->
<script src="{{asset('/bootstrap/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/bootstrap/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>



<footer>
<br><br><br><br><br>
<center>
<p>

</p>
</center>
</footer>






    {{--</header>--}}

{{--</div>--}}
</body>

</html>
