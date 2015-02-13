{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Haberler</small>
{% endblock %}
{% block breadcrumb %}
    <li class="active">Haber Ekle / Düzenle</li>
{% endblock %}
{% block body %}
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Haberler</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <form action="/admin/news/order">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>Seçiniz</th>
                    <th>ID</th>
                    <th>Haber Başlığı</th>
                    <th>Eklenme Tarihi</th>
                    <th>Durum</th>
                    <th>Sıralama</th>
                    <th>İşlemler</th>
                </tr>
                {% for news in ListNews %}
                    <tr>
                        <td>
                            <input type="checkbox" name="fieldID" value="{{ news.id }}">
                        </td>
                        <td>{{ news.id }}</td>
                        <td>{{ news.title }}</td>
                        <td>{{ news.create_date }}</td>
                        {% if news.status == 1 %}
                            <td><span class="label label-success">Aktif</span></td>
                        {% else %}
                            <td><span class="label label-danger">Deaktif</span></td>
                        {% endif %}
                        <td>
                            <div class="col-xs-3">
                                <input type="text" name="seq" class="form-control" value="{{ news.seq }}">
                            </div>
                        </td>
                        <td>
                            <a href="/admin/news/edit/{{ news.id }}"><button class="btn btn-primary btn-xsm">Düzenle</button></a>
                            {% if news.status == 1 %}
                                <button class="btn btn-danger btn-xsm" onclick="moduleDeactive({{ news.id }},0)">Deaktif</button>
                            {% else %}
                                <button class="btn btn-success btn-xsm" onclick="moduleDeactive({{ news.id }},1)">Aktif</button>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                <tr>
                    <td>
                        <button class="btn btn-danger btn-xsm">Sil</button>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-success btn-xsm" style="margin-left: 15px">Sırala</button>
                    </td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="box box-primary collapsed-box" id="collapse_load">
        <div class="box-header">
            <h3 class="box-title">Haber Ekleme Formu</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="/admin/news/add">
            <div class="box-body">
                <div class="form-group">
                    <label>Haber Başlığı</label>
                    <input type="text" name="title" class="form-control" id="news" placeholder="Haber Başlığı">
                </div>
                <div class="form-group">
                    <label>Haber İçeriği</label>
                    <textarea name="content" id="editor" class="form-control" rows="3" placeholder="Haber İçeriği"></textarea>
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
{% endblock %}
{% block js %}
    <script src="/public/js/AdminLTE/formProcess.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('editor');
        });
    </script>
{% endblock %}