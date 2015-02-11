{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Haberler</small>
{% endblock %}
{% block breadcrumb %}
    <li class="active">Haber Ekle / Düzenle</li>
{% endblock %}
{% block body %}
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Haber Ekleme Formu</h3>
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

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Haberler</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Haber Başlığı</th>
                    <th>Eklenme Tarihi</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                </tr>
                {% for module in modules %}
                    <tr>
                        <td>{{ module.id }}</td>
                        <td>{{ module.module_name }}</td>
                        <td>{{ module.module_file }}</td>
                        {% if module.status == 1 %}
                            <td><span class="label label-success">Aktif</span></td>
                        {% else %}
                            <td><span class="label label-danger">Deaktif</span></td>
                        {% endif %}
                        <td>
                            {% if module.status == 1 %}
                                <button class="btn btn-danger btn-xsm" onclick="moduleDeactive({{ module.id }},0)">Deaktif</button>
                            {% else %}
                                <button class="btn btn-success btn-xsm" onclick="moduleDeactive({{ module.id }},1)">Aktif</button>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

{% endblock %}
{% block js %}
    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('editor');
        });
    </script>
{% endblock %}