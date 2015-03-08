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