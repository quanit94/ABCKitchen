<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý nhà ăn</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style("public/admin/css/bootstrap.min.css")}}

    <!-- Custom CSS -->
    {{HTML::style("public/admin/css/sb-admin.css")}}

    <!-- Morris Charts CSS -->
    {{HTML::style("public/admin/css/plugins/morris.css")}}

    <!-- Custom Fonts -->
    {{HTML::style("public/admin/font-awesome/css/font-awesome.min.css")}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::route('dashboard')}}">Quản lý nhà ăn</a>
                <a class="navbar-brand" href="{{URL::route('main')}}">ABCKitchen</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            @include('admin.template.menu')
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 class="page-header">
                            @yield('title')
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Trang chủ
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('flash_success'))
                            <div class="alert alert-success" role="alert"><span class='glyphicon glyphicon-ok'></span> {{Session::get('flash_success')}}</div>
                        @endif 
                        @if(Session::has('flash_error'))
                        <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>{{Session::get('flash_error')}}</div>
                        @endif
                        @if(Session::has('flash_warning'))
                        <div class="alert alert-warning" role="alert"><span class='glyphicon glyphicon-warning-sign'></span> {{Session::get('flash_warning')}}</div>
                        @endif
                    </div>
                </div>
                <hr>
                @yield('content')
                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> -->
                    
               
                <!-- /.row -->

                <!-- </div> -->
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/admin/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="../public/admin/js/plugins/morris/morris.min.js"></script>
    <script src="../public/admin/js/plugins/morris/morris-data.js"></script>

    <!-- JQUERY SCRIPTS -->
    {{HTML::script('public/admin/js/jquery.js')}}
    <!-- BOOTSTRAP SCRIPTS -->
    {{HTML::script('public/admin/js/bootstrap.min.js')}}
    @section('other_js')
    @show
    <script type="text/javascript">
        $(document).ready(function(){
            $('.confirm').on('click', function(){
                return confirm('Bạn có chắc chắn thực hiện hành động này không ?');
            });
        });
    </script>
</body>

</html>
