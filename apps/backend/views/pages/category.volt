{% extends "templates/index.volt" %}
{% block content_header %}
    <small>Kategoriler</small>
{% endblock %}
{% block breadcrumb %}
    <li>Sayfalar</li>
    <li class="active">Sayfa Ekle</li>
{% endblock %}
{% block body %}
    {% if pagingUrl[4] != 'edit' %}
        {% include "pages/forms/add_section.volt" %}
    {% endif %}

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
                html: true,
                fa: true,
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