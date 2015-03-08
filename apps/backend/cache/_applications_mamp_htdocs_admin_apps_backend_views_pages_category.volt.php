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
                
    <small>Kategoriler</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/controlpanel/index"><i class="fa fa-dashboard"></i> Ana Sayfa</a></li>
                
    <li>Sayfalar</li>
    <li class="active">Kategori Ekle / Düzenle</li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            
    <?php if ($pagingUrl[4] != 'edit') { ?>
        <!-- form start -->
<form role="form" action="/admin/pages/add" id="addForm">
<div class="col-md-7">
    <div class="box box-primary" id="collapse_load">
        <div class="message"></div>
        <div class="box-header">
            <h3 class="box-title">Sayfa Ekle</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Sayfa Başlığı</label>
                    <input type="text" name="page_title" class="form-control" id="title" placeholder="Sayfa Başlığı">
                    <div class="seo_url" style="display: none;">
                        <p>http://www.webadresiniz.com/<span id="seo_url"></span></p>
                    </div>
                    <input type="hidden" name="seo_url" value="" id="seo_hidden"/>
                </div>
                <div class="form-group">
                    <label for="editor">Sayfa İçeriği</label>
                    <textarea name="page_content" id="editor" class="form-control validate[required]" placeholder="Sayfa İçeriği" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="seo_description">Seo Açıklaması</label>
                    <input type="text" name="seo_description" class="form-control" id="seo_description" placeholder="Seo Açıklaması">
                </div>
                <div class="form-group">
                    <label for="seo_keywords">Seo Anahtar Kelimeler</label>
                    <input type="text" name="seo_keywords" class="form-control" id="seo_keywords" placeholder="Seo Anahtar Kelimeler">
                </div>
                <div class="form-group">
                    <label for="external_url">Sayfa Dış Link</label>
                    <input type="text" name="external_url" class="form-control" id="external_url" placeholder="Sayfa Dış Link">
                </div>
                <div class="form-group">
                    <label for="module_id">Sayfa Modülü</label> <br>

                    <div class="row col-xs-4">
                        <select name="module_id" class="form-control" id="module_id">
                            <option value="">Lütfen Seçiniz</option>
                            <?php foreach ($ListModule as $catModule) { ?>
                                <option value="<?php echo $catModule->module_id; ?>"><?php echo $catModule->module_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" id="add" value="Ekle">
            </div>
    </div>
</div>

<div class="col-md-5">
    <div class="box box-warning" id="collapse_load">
        <div class="box-header">
            <h3 class="box-title">Kategori Bölümü Seçimi</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-warning btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
            <div class="box-body">
                <p>Bu bölümden, eklediğiniz sayfayla ilgili bir kategori seçebilirsiniz. Eğer sayfanız bir kategoriye ait değilse herhangi bir seçim yapılması gerekmemektedir.</p>

                <div class="form-group">
                    <label for="news">Sayfa Kategorisi</label>
                    <br>
                    <div class="row col-xs-7">
                        <select name="page_id" class="form-control" id="page_id">
                            <option value="">Lütfen Seçiniz</option>
                            <?php foreach ($ListCategories as $categories) { ?>
                            <option value="<?php echo $categories->id; ?>"><?php echo $categories->page_title; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer"></div>
    </div>
</div>
</form>
<div class="clearfix"></div>
    <?php } ?>

    <?php if ($pagingUrl[4] == 'edit') { ?>
        <div class="box box-primary" id="collapse_load">
    <div class="message"></div>
    <div class="box-header">
        <h3 class="box-title">Haber Düzenleme Formu</h3>

        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php foreach ($UpdateNews as $update) { ?>
        <form role="form" action="/admin/news/update/<?php echo $update->id; ?>" id="addForm" enctype="multipart/form-data">
            <div class="box-body">
                <div class="form-group">
                    <label for="news">Haber Başlığı <span class="text-red">*</span></label>
                    <input type="text" name="title" class="form-control validate[required]" id="news" placeholder="Haber Başlığı" value="<?php echo $update->title; ?>">
                </div>
                <div class="form-group">
                    <label for="editor">Haber İçeriği <span class="text-red">*</span></label>
                    <textarea name="content" id="editor" class="form-control validate[required]" placeholder="Haber İçeriği" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $update->content; ?></textarea>
                </div>
                <?php if ($update->photo != '') { ?>
                    <div class="form-group record">
                        <label for="photo">Eklenen Fotoğraf </label> <br>
                        <canvas id="canvas" width=150 src="/uploads/<?php echo $update->photo; ?>"></canvas>
                        <div class="text-red">
                            <strong><a href="javascript:void(0)" class="delete" id="<?php echo $update->id; ?>">Fotoğrafı Sil</a></strong>
                        </div>
                    </div>
                    <script src="/js/AdminLTE/canvasImage.js" type="text/javascript"></script>
                <?php } ?>
                <div class="form-group">
                    <label>Fotoğraf Ekle</label> <input type="file" name="photos">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" id="add" value="Haber Ekle">
            </div>
        </form>
    <?php } ?>
</div>
    <?php } ?>
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
                html: true,
                fa: true,
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