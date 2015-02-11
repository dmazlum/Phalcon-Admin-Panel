{% for activemodules in ActiveModules %}
    <li class="treeview">
        <a href="#">
            {%  if activemodules.module_file == "news" %}
            <i class="fa fa-newspaper-o"></i>
            {% endif %}
            {%  if activemodules.module_file == "pages" %}
                <i class="fa fa-edit"></i>
            {% endif %}
            {%  if activemodules.module_file == "products" %}
                <i class="fa fa-shopping-cart"></i>
            {% endif %}
            {%  if activemodules.module_file == "users" %}
                <i class="fa fa-users"></i>
            {% endif %}
            {%  if activemodules.module_file == "contact" %}
                <i class="fa fa-envelope"></i>
            {% endif %}
            <span>{{ activemodules.module_name }}</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="/admin/{{ activemodules.module_file }}/edit"><i class="fa fa-angle-double-right"></i> Ekle / Düzenle</a></li>
            <li><a href="/admin/{{ activemodules.module_file }}/list"><i class="fa fa-angle-double-right"></i> Listele</a></li>
        </ul>
    </li>
{% endfor %}