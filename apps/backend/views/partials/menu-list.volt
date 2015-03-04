{% for activemodules in ActiveModules %}
        <li class="treeview">
        <a href="#">
            <i class="fa {{ activemodules.icon }}"></i><span>{{ activemodules.module_name }}</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            {% for module_links in ModuleLinks %}
                {% if activemodules.module_id == module_links.module_id %}
                <li>
                    <a href="/admin/{{ activemodules.module_file }}/{{ module_links.menu_url }}">
                        <i class="fa fa-angle-double-right"></i>{{ module_links.menu_fieldname }}
                    </a>
                </li>
                    {% endif %}
            {% endfor %}
        </ul>
    </li>
{% endfor %}