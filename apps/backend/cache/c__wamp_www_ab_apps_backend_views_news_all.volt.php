<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Ana Sayfa</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="/css/validation/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
    <link href="/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="/admin/controlpanel/index" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        Admin Panel
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">4 adet mesajınız var</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/img/avatar3.png" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li><!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/img/avatar2.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/img/avatar.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/img/avatar2.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="/img/avatar.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Jane Doe <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="/img/avatar3.png" class="img-circle" alt="User Image" />
                            <p>
                                Jane Doe - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Kullanıcı</a>
                            </div>
                            <div class="pull-right">
                                <a href="/admin/login/logout" class="btn btn-default btn-flat">Çıkış Yap</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/img/avatar3.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Merhaba,  </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="/admin/controlpanel/index">
                        <i class="fa fa-dashboard"></i> <span>Ana Sayfa</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/controlpanel/modules">
                        <i class="fa fa-th"></i> <span>Modüller</span>
                    </a>
                </li>
                <?php echo $this->partial('partials/menu-list'); ?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                
    <small>Haberler</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/controlpanel/index"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
                
    <li class="active">Haber Ekle / Düzenle</li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            
    <?php $Action = $pagingUrl[3]; ?>

    <?php if ($Action == 'edit') { ?>
        <div class="box box-primary" id="collapse_load">
    <div class="box-header">
        <h3 class="box-title">Haber Düzenleme Formu</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="/admin/news/update">
        <div class="box-body">
            <div class="form-group">
                <label>Haber Başlığı</label>
                <input type="text" name="title" class="form-control" id="news" placeholder="Haber Başlığı">
            </div>
            <div class="form-group">
                <label>Haber İçeriği</label>
                    <textarea name="content" id="editor" class="form-control" rows="3"
                              placeholder="Haber İçeriği"></textarea>
            </div>
            <div class="form-group">
                <label>Haber Fotoğrafı</label>
                <input type="file" name="photos">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Haber Ekle</button>
        </div>
    </form>
</div>
    <?php } ?>

    <div class="alert alert-success alert-dismissable" style="display: none;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <b>Başarılı</b> İşlem
    </div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Haberler</h3>
        </div>
        <br>
            <form id="ListTable">
                <input type="hidden" name="DeleteURL" value="/admin/news/delete">
                <input type="hidden" name="SeqURL" value="/admin/news/order">

                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Seçiniz</th>
                        <th class="text-center">ID</th>
                        <th>Haber Başlığı</th>
                        <th>Ekleme Tarihi</th>
                        <th>Sıralama</th>
                        <th class="text-center">Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ListNews as $news) { ?>
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" id="fieldID" name="fieldID[]" value="<?php echo $news->id; ?>">
                            </td>
                            <td class="text-center"><?php echo $news->id; ?></td>
                            <td><?php echo $news->title; ?></td>
                            <td><?php $date = $news->create_date; ?> <?php echo date('d.m.Y', strtotime($date)); ?></td>
                            <td>
                                <input type="text" name="seq[]" class="input-small" value="<?php echo $news->seq; ?>">
                                <input type="hidden" name="seqID[]" value="<?php echo $news->id; ?>" />
                            </td>
                            <?php if ($news->status == 1) { ?>
                                <td class="text-center"><span class="label label-success">Aktif</span></td>
                            <?php } else { ?>
                                <td class="text-center"><span class="label label-danger">Deaktif</span></td>
                            <?php } ?>
                            <td>
                                <a href="/admin/news/edit/<?php echo $news->id; ?>">
                                    <button class="btn btn-primary btn-xsm">Düzenle</button>
                                </a>
                                <?php if ($news->status == 1) { ?>
                                    <button class="btn btn-danger btn-xsm" onclick="moduleDeactive(<?php echo $news->id; ?>,0)">
                                        Deaktif
                                    </button>
                                <?php } else { ?>
                                    <button class="btn btn-success btn-xsm" onclick="moduleDeactive(<?php echo $news->id; ?>,1)">
                                        Aktif
                                    </button>
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
                        <td>
                            <input type="button" class="btn btn-success btn-xsm" id="order" value="Sırala">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </form>
    </div>
    <!-- /.box -->

    <?php if ($Action == 'all') { ?>
    <div class="box box-primary" id="collapse_load">
    <div class="message"></div>
    <div class="box-header">
        <h3 class="box-title">Haber Ekleme Formu</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="/admin/news/add" id="addForm" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label for="news">Haber Başlığı <span class="text-red">*</span></label>
                <input type="text" name="title" class="form-control validate[required]" id="news" placeholder="Haber Başlığı">
            </div>
            <div class="form-group">
                <label for="editor">Haber İçeriği <span class="text-red">*</span></label>
                <textarea name="content" id="editor" class="form-control validate[required]" placeholder="Haber İçeriği" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <div class="form-group">
                <label>Haber Fotoğrafı</label>
                <input type="file" name="photos">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <input type="submit" class="btn btn-primary" id="add" value="Haber Ekle">
        </div>
    </form>
</div>
    <?php } ?>


        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/js/AdminLTE/app.js" type="text/javascript"></script>
<!-- Validation -->
<script type="text/javascript" src="/js/plugins/validation/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/js/plugins/validation/jquery.validationEngine-tr.js"></script>

    <script src="/js/AdminLTE/formProcess.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="/js/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.tr-TR.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#editor").wysihtml5({
                "html": true,
                locale: "tr-TR"
            });
        });
    </script>
    <!-- DATA TABES SCRIPT -->
    <script src="/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
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
