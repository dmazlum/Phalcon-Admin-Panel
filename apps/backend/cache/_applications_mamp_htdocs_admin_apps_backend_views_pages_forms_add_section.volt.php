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