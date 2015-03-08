{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Kullanıcılar</small>
{% endblock %}
{% block breadcrumb %}
    <li>Kullanıcılar</li>
    <li class="active">Kullanıcı Ekle / Düzenle</li>
{% endblock %}
{% block body %}

    {% if pagingUrl[4] == 'edit' %}
        {% include "users/forms/edit.volt" %}
    {% endif %}

    {% if pagingUrl[4] != 'edit' %}
        {% include "users/forms/add.volt" %}
    {% endif %}
<div class="row">
    <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Kullanıcılar</h3>
        </div>
        <div class="box-body">
        <form id="ListTable">
            <input type="hidden" name="DeleteURL" value="/admin/users/delete">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">Seçiniz</th>
                    <th class="text-center">ID</th>
                    <th>Kullanıcı Adı</th>
                    <th>Tip</th>
                    <th class="text-center">Durum</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                {% for users in ListUser %}
                    <tr>
                        <td class="text-center">
                            {% if users.id != 1 %}
                            <input type="checkbox" id="fieldID" name="fieldID[]" value="{{ users.id }}" />
                            {% endif %}
                        </td>
                        <td class="text-center">{{users.id }}</td>
                        <td>{{ users.username }}</td>
                        <td>{{ users.role_name }}</td>
                        {% if users.status == 1 %}
                            <td class="text-center"><span class="label label-success">Aktif</span></td>
                        {% else %}
                            <td class="text-center"><span class="label label-danger">Deaktif</span></td>
                        {% endif %}
                        <td>
                            <a href="/admin/users/index/edit/{{ users.id }}">
                                <input type="button" class="btn btn-primary btn-xsm" value="Düzenle">
                            </a>
                            {% if users.id != 1 %}
                            {% if users.status == 1 %}
                                <button class="btn btn-danger btn-xsm" onclick="recordAction({{ users.id }},0,'users/status/disable')">
                                    Deaktif
                                </button>
                            {% else %}
                                <button class="btn btn-success btn-xsm" onclick="recordAction({{ users.id }},1,'users/status/enable')">
                                    Aktif
                                </button>
                            {% endif %}
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                <tr>
                    <td class="text-center">
                        <input type="button" class="btn btn-danger btn-xsm" id="delete" value="Sil">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </form>
            </div>
    </div>
        </div>
    </div>
    <!-- /.box -->

{% endblock %}
{% block js %}
    <script src="/dist/js/formProcess.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.tr-TR.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#editor").wysihtml5({
                toolbar: {
                    "html": true,
                    "fa": true
                },
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
{% endblock %}