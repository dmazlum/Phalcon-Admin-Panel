<?php foreach ($ActiveModules as $activemodules) { ?>
        <li class="treeview">
        <a href="#">
            <i class="fa <?php echo $activemodules->icon; ?>"></i><span><?php echo $activemodules->module_name; ?></span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <?php foreach ($ModuleLinks as $module_links) { ?>
                <?php if ($activemodules->module_id == $module_links->module_id) { ?>
                <li>
                    <a href="/admin/<?php echo $activemodules->module_file; ?>/<?php echo $module_links->menu_url; ?>">
                        <i class="fa fa-circle-o"></i><?php echo $module_links->menu_fieldname; ?>
                    </a>
                </li>
                    <?php } ?>
            <?php } ?>
        </ul>
    </li>
<?php } ?>