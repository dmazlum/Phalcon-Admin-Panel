{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Sayfalar</small>
{% endblock %}
{% block breadcrumb %}
    <li>Sayfalar</li>
    <li class="active">Sayfa Düzenle</li>
{% endblock %}
{% block body %}
    {% if pagingUrl[4] == 'edit' %}
        {% include "pages/forms/edit_section.volt" %}
    {% endif %}
    {%- macro print_menu_level(menu_level_items) %}
        {%- for menu_item in menu_level_items %}

            {% if menu_item.page_id != 0 %}

                <tr>
                    <td class="text-center">
                        <input type="checkbox" id="fieldID" name="fieldID[]" value="{{ menu_item.id }}">
                    </td>
                    <td>&nbsp;&nbsp; {{ menu_item.page_title }}</td>
                    <td>
                        <input type="text" name="seq[]" class="input-small" value="{{ menu_item.seq }}">
                        <input type="hidden" name="seqID[]" value="{{ menu_item.id }}"/>
                    </td>
                    {% if menu_item.status == 1 %}
                        <td class="text-center"><span class="label label-success">Aktif</span></td>
                    {% else %}
                        <td class="text-center"><span class="label label-danger">Deaktif</span></td>
                    {% endif %}
                    <td>
                        <a href="/admin/pages/index/edit/{{ menu_item.id }}">
                            <input type="button" class="btn btn-primary btn-xsm" value="Düzenle">
                        </a>
                        {% if menu_item.status == 1 %}
                            <button class="btn btn-danger btn-xsm" onclick="recordAction({{ menu_item.id }},0,'pages/status/disable')">
                                Deaktif
                            </button>
                        {% else %}
                            <button class="btn btn-success btn-xsm" onclick="recordAction({{ menu_item.id }},1,'pages/status/enable')">
                                Aktif
                            </button>
                        {% endif %}
                    </td>
                </tr>
                {% else %}
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" id="fieldID" name="fieldID[]" value="{{ menu_item.id }}">
                        </td>
                        <td><strong>{{ menu_item.page_title }}</strong></td>
                        <td>
                            <input type="text" name="seq[]" class="input-small" value="{{ menu_item.seq }}">
                            <input type="hidden" name="seqID[]" value="{{ menu_item.id }}"/>
                        </td>
                        {% if menu_item.status == 1 %}
                            <td class="text-center"><span class="label label-success">Aktif</span></td>
                        {% else %}
                            <td class="text-center"><span class="label label-danger">Deaktif</span></td>
                        {% endif %}
                        <td>
                            <a href="/admin/pages/index/edit/{{ menu_item.id }}">
                                <input type="button" class="btn btn-primary btn-xsm" value="Düzenle">
                            </a>
                            {% if menu_item.status == 1 %}
                                <button class="btn btn-danger btn-xsm" onclick="recordAction({{ menu_item.id }},0,'pages/status/disable')">
                                    Deaktif
                                </button>
                            {% else %}
                                <button class="btn btn-success btn-xsm" onclick="recordAction({{ menu_item.id }},1,'pages/status/enable')">
                                    Aktif
                                </button>
                            {% endif %}
                        </td>
                    </tr>

            {% endif %}

            {% set next_menu_level_items = menu_item.getChilds() %}
            {% if next_menu_level_items %}
                {{ print_menu_level(next_menu_level_items) }}
            {% endif %}
        {%- endfor %}
    {%- endmacro %}

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Kategoriler</h3>
        </div>
        <div class="box-body">
        <form id="ListTable">
            <input type="hidden" name="DeleteURL" value="/admin/pages/delete">
            <input type="hidden" name="SeqURL" value="/admin/pages/order">

            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="text-center">Seçiniz</th>
                    <th>Sayfa Başlığı</th>
                    <th>Sıralama</th>
                    <th class="text-center">Durum</th>
                    <th>İşlemler</th>
                </tr>
                </thead>

                <tbody>
                {{ print_menu_level(ListCategories) }}
                <tr>
                    <td class="text-center">
                        <input type="button" class="btn btn-danger btn-xsm" id="delete" value="Sil">
                    </td>
                    <td></td>
                    <td><input type="button" class="btn btn-success btn-xsm" id="order" value="Sırala"></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>

            <div class="clearfix"></div>
        </form>
        </div>
    </div>
    </div>
    <!-- /.box -->
{% endblock %}
{% block js %}
    <script src="/dist/js/jquery.friendurl.min.js" type="text/javascript"></script>
    <script src="/dist/js/formProcess.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.tr-TR.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#editor").wysihtml5({
                    "html": true,
                    "fa": true,
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