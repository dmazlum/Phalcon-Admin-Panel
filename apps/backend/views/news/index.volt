{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Haberler</small>
{% endblock %}
{% block breadcrumb %}
    <li class="active">Haber Ekle / Düzenle</li>
{% endblock %}
{% block body %}

    {% if pagingUrl[4] == 'edit' %}
        {% include "news/forms/edit.volt" %}
    {% endif %}

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Haberler</h3>
        </div>
        <br>
            <form id="ListTable">
                <input type="hidden" name="DeleteURL" value="/admin/news/delete">
                <input type="hidden" name="SeqURL" value="/admin/news/order">

                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Seçiniz</th>
                        <th class="text-center">ID</th>
                        <th>Haber Başlığı</th>
                        <th>Ekleme Tarihi</th>
                        <th>Sıralama</th>
                        <th class="text-center">Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for news in ListNews %}
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" id="fieldID" name="fieldID[]" value="{{ news.id }}">
                            </td>
                            <td class="text-center">{{ news.id }}</td>
                            <td>{{ news.title }}</td>
                            <td>{% set date = news.create_date  %} {{ date('d.m.Y', strtotime(date)) }}</td>
                            <td>
                                <input type="text" name="seq[]" class="input-small" value="{{ news.seq }}">
                                <input type="hidden" name="seqID[]" value="{{ news.id }}" />
                            </td>
                            {% if news.status == 1 %}
                                <td class="text-center"><span class="label label-success">Aktif</span></td>
                            {% else %}
                                <td class="text-center"><span class="label label-danger">Deaktif</span></td>
                            {% endif %}
                            <td>
                                <a href="/admin/news/index/edit/{{ news.id }}">
                                    <input type="button" class="btn btn-primary btn-xsm" value="Düzenle">
                                </a>
                                {% if news.status == 1 %}
                                    <button class="btn btn-danger btn-xsm" onclick="recordAction({{ news.id }},0,'news/status/disable')">
                                        Deaktif
                                    </button>
                                {% else %}
                                    <button class="btn btn-success btn-xsm" onclick="recordAction({{ news.id }},1,'news/status/enable')">
                                        Aktif
                                    </button>
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
                        <td>
                            <input type="button" class="btn btn-success btn-xsm" id="order" value="Sırala">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </form>
    </div>
    <!-- /.box -->

    {% if pagingUrl[4] != 'edit' %}
    {% include "news/forms/add.volt" %}
    {% endif %}

{% endblock %}
{% block js %}
    <script src="/js/AdminLTE/formProcess.js" type="text/javascript"></script>
    <!-- CK Editor -->
    <script src="/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <script src="/js/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.tr-TR.js" type="text/javascript"></script>
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
    <script src="/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
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
    <script src="/js/AdminLTE/canvasImage.js" type="text/javascript"></script>
{% endblock %}