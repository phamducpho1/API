<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="Vu Quoc Tuan">
    <title>Trang Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url ('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{url('admin/ckeditor/ckeditor.js')}}"></script>  
    <!-- MetisMenu CSS -->
    <link href="{{url('admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{url('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{url('admin/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Trang Admin</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <br>
                        
                       
                       
                        <li>
                            <a href="{!! route('products.index') !!}"><i class="fa fa-th-list"></i>Products</a>

                            
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="{!! route('categories.index') !!}"><i class="fa fa-tasks"></i>Categories</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    
                    <!-- /.col-lg-12 -->
                        

                                @yield('content')

        




                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
  
</body>

</html>
