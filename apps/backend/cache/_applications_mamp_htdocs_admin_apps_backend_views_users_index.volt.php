<!DOCTYPE html>
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
                
    <small>Kullanıcılar</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/controlpanel/index"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
                
    <li>Kullanıcılar</li>
    <li class="active">Kullanıcı Ekle / Düzenle</li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            

    <?php if ($pagingUrl[4] == 'edit') { ?>
        <div class="box box-primary">
    <div class="message"></div>
    <div class="box-header">
        <h3 class="box-title">Kullanıcı Düzenleme Formu</h3>

        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- /.box-header --><!-- form start -->
    <?php foreach ($UpdateUser as $update) { ?>
        <form role="form" action="/admin/users/update/<?php echo $update->id; ?>" id="addForm">
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Adı Soyadı</label> <br/>
                    <div class="row col-sm-4">
                        <input type="text" name="name_surname" class="form-control" id="name" value="<?php echo $update->name_surname; ?>">
                    </div>
                    <br/><br/>
                </div>
                <div class="form-group">
                    <label for="username">Kullanıcı Adı <span class="text-red">*</span></label> <br/>
                    <div class="row col-sm-4">
                        <input type="text" name="username" class="form-control validate[required]" id="username" value="<?php echo $update->username; ?>">
                    </div>
                    <br/><br/>
                </div>
                <div class="form-group">
                    <label for="password">Şifre</label> <br/>
                    <div class="row col-sm-4">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Şifre">
                    </div>
                    <br/><br/>
                </div>
                <div class="form-group">
                    <label>Kullanıcı Türü</label> <br>

                    <div class="row col-xs-2">
                        <select name="role" class="form-control validate[required]" id="roles">
                            <option value="">Lütfen Seçiniz</option>
                            <?php foreach ($Roles as $userRole) { ?>

                                <?php if ($userRole->role_id == $update->role) { ?>
                                    <?php $selected = 'selected'; ?>
                                <?php } else { ?>
                                    <?php $selected = ''; ?>
                                <?php } ?>

                                <option value="<?php echo $userRole->role_id; ?>" <?php echo $selected; ?>><?php echo $userRole->role_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br/>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" id="add" value="Kullanıcı Düzenle">
            </div>
        </form>
    <?php } ?>
</div>
    <?php } ?>

    <?php if ($pagingUrl[4] != 'edit') { ?>
        <div class="box box-primary collapsed-box" id="collapse_load">
    <div class="message"></div>
    <div class="box-header">
        <h3 class="box-title">Kullanıcı Ekleme Formu</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="/admin/users/add" id="addForm">
        <div class="box-body">
            <div class="form-group">
                <label for="name">Adı Soyadı</label> <br/>
                <div class="row col-sm-4">
                    <input type="text" name="name_surname" class="form-control" id="name" placeholder="Adı Soyadı">
                </div>
                <br/><br/>
            </div>
            <div class="form-group">
                <label for="username">Kullanıcı Adı <span class="text-red">*</span></label> <br/>
                <div class="row col-sm-4">
                <input type="text" name="username" class="form-control validate[required]" id="username" placeholder="Kullanıcı Adı">
                </div>
                <br/><br/>
            </div>
            <div class="form-group">
                <label for="password">Şifre <span class="text-red">*</span></label> <br/>
                <div class="row col-sm-4">
                <input type="password" name="password" class="form-control validate[required]" id="password" placeholder="Şifre">
                </div>
                <br/><br/>
            </div>
            <div class="form-group">
                <label>Kullanıcı Türü</label>
                <br>
                <div class="row col-xs-2">
                <select name="role" class="form-control validate[required]" id="roles">
                    <option value="">Lütfen Seçiniz</option>
                <?php foreach ($Roles as $userRole) { ?>
                    <option value="<?php echo $userRole->role_id; ?>"><?php echo $userRole->role_name; ?></option>
                <?php } ?>
                </select>
                </div>
                <br/>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <input type="submit" class="btn btn-primary" id="add" value="Kullanıcı Ekle">
        </div>
    </form>
</div>
    <?php } ?>
<div class="row">
    <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Kullanıcılar</h3>
        </div>
        <div class="box-body">
        <form id="ListTable">
            <input type="hidden" name="DeleteURL" value="/admin/users/delete">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">Seçiniz</th>
                    <th class="text-center">ID</th>
                    <th>Kullanıcı Adı</th>
                    <th>Tip</th>
                    <th class="text-center">Durum</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($ListUser as $users) { ?>
                    <tr>
                        <td class="text-center">
                            <?php if ($users->id != 1) { ?>
                            <input type="checkbox" id="fieldID" name="fieldID[]" value="<?php echo $users->id; ?>" />
                            <?php } ?>
                        </td>
                        <td class="text-center"><?php echo $users->id; ?></td>
                        <td><?php echo $users->username; ?></td>
                        <td><?php echo $users->role_name; ?></td>
                        <?php if ($users->status == 1) { ?>
                            <td class="text-center"><span class="label label-success">Aktif</span></td>
                        <?php } else { ?>
                            <td class="text-center"><span class="label label-danger">Deaktif</span></td>
                        <?php } ?>
                        <td>
                            <a href="/admin/users/index/edit/<?php echo $users->id; ?>">
                                <input type="button" class="btn btn-primary btn-xsm" value="Düzenle">
                            </a>
                            <?php if ($users->id != 1) { ?>
                            <?php if ($users->status == 1) { ?>
                                <button class="btn btn-danger btn-xsm" onclick="recordAction(<?php echo $users->id; ?>,0,'users/status/disable')">
                                    Deaktif
                                </button>
                            <?php } else { ?>
                                <button class="btn btn-success btn-xsm" onclick="recordAction(<?php echo $users->id; ?>,1,'users/status/enable')">
                                    Aktif
                                </button>
                            <?php } ?>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td class="text-center">
                        <input type="button" class="btn btn-danger btn-xsm" id="delete" value="Sil">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </form>
            </div>
    </div>
        </div>
    </div>
    <!-- /.box -->


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

    <script src="/dist/js/formProcess.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.tr-TR.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#editor").wysihtml5({
                toolbar: {
                    "html": true,
                    "fa": true
                },
                locale: "tr-TR"
            });
        });
    </script>
    <!-- DATA TABES SCRIPT -->
    <script src="/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $('#dataTable').dataTable({
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": false,
                "bInfo": false,
                "bAutoWidth": true
            });
        });
    </script>

</body>
</html>