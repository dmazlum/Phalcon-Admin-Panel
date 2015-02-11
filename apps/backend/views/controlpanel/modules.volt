{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Modüller</small>
{% endblock %}
{% block breadcrumb %}
    <li class="active">Modüller</li>
{% endblock %}

{% block body %}
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sistemde Ekli Modüller</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Modül Adı</th>
                        <th>Modül Dosyası</th>
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
    </div>
{% endblock %}
{% block js %}
<script src="/public/js/AdminLTE/formProcess.js" type="text/javascript"></script>
{% endblock %}