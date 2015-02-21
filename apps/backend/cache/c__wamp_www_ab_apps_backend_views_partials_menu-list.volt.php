<?php foreach ($ActiveModules as $activemodules) { ?>
    <li class="treeview">
        <a href="#">
            <?php if ($activemodules->module_file == 'news') { ?>
            <i class="fa fa-newspaper-o"></i>
            <?php } ?>
            <?php if ($activemodules->module_file == 'pages') { ?>
                <i class="fa fa-edit"></i>
            <?php } ?>
            <?php if ($activemodules->module_file == 'products') { ?>
                <i class="fa fa-shopping-cart"></i>
            <?php } ?>
            <?php if ($activemodules->module_file == 'users') { ?>
                <i class="fa fa-users"></i>
            <?php } ?>
            <?php if ($activemodules->module_file == 'contact') { ?>
                <i class="fa fa-envelope"></i>
            <?php } ?>
            <?php if ($activemodules->module_file == 'gallery') { ?>
                <i class="fa fa-photo"></i>
            <?php } ?>
            <span><?php echo $activemodules->module_name; ?></span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="/admin/<?php echo $activemodules->module_file; ?>/all"><i class="fa fa-angle-double-right"></i> Ekle / Düzenle</a></li>
            <li><a href="/admin/<?php echo $activemodules->module_file; ?>/list"><i class="fa fa-angle-double-right"></i> Listele</a></li>
        </ul>
    </li>
<?php } ?>