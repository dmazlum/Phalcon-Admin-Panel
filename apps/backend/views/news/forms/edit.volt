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