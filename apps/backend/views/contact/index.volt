{% extends "templates/index.volt" %}
{% block content_header %}
    <small>İletişim</small>
{% endblock %}
{% block breadcrumb %}
    <li>İletişim</li>
    <li class="active">Ekle / Düzenle</li>
{% endblock %}
{% block body %}
        {% include "contact/forms/add.volt" %}
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
{% endblock %}