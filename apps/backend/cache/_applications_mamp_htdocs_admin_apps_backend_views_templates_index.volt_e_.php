a:9:{i:0;s:7396:"<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.css" rel="stylesheet" type="text/css"/>
    <link href="/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/validation/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo"><b>Admin</b>Panel v1</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span> </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span> </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Alexander Pierce</span> </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/admin/login/logout" class="btn btn-default btn-flat">Çıkış</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="/admin/controlpanel/index"> <i class="fa fa-dashboard"></i> <span>Ana Sayfa</span> </a>
                </li>
                <li>
                    <a href="/admin/controlpanel/modules"> <i class="fa fa-th"></i> <span>Modüller</span> </a>
                </li>
                <?php echo $this->partial('partials/menu-list'); ?>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                ";s:14:"content_header";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:64:"
                    <small>Admin Panel</small>
                ";s:4:"file";s:71:"/Applications/MAMP/htdocs/admin/apps/backend/views/templates/index.volt";s:4:"line";i:149;}}i:1;s:178:"
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/controlpanel/index"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
                ";s:10:"breadcrumb";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:74:"
                    <li class="active">Hoşgeldiniz</li>
                ";s:4:"file";s:71:"/Applications/MAMP/htdocs/admin/apps/backend/views/templates/index.volt";s:4:"line";i:155;}}i:2;s:124:"
            </ol>
        </section>

        <!-- Main content -->
        <section class="content clearfix">
            ";s:4:"body";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:13:"
            ";s:4:"file";s:71:"/Applications/MAMP/htdocs/admin/apps/backend/views/templates/index.volt";s:4:"line";i:162;}}i:3;s:928:"
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="clearfix"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js" type="text/javascript"></script>
<!-- iCheck 1.0.1 -->
<script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });
    });
</script>
<!-- Validation -->
<script type="text/javascript" src="/plugins/validation/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/plugins/validation/jquery.validationEngine-tr.js"></script>
";s:2:"js";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:1:"
";s:4:"file";s:71:"/Applications/MAMP/htdocs/admin/apps/backend/views/templates/index.volt";s:4:"line";i:191;}}i:4;s:16:"
</body>
</html>";}