{%- macro print_menu_level2(menu_level_items2, page_id) %}
    {%- for menu_item2 in menu_level_items2 %}
        {% if loop.first %}
            <ul id="SubMenu">
        {% endif %}

        {% if page_id == menu_item2.id  %}
            {% set selected2 = 'class="menuSelect"' %}
        {% else %}
            {%  set selected2 = '' %}
        {% endif %}

        <li><a href="javascript:void(0)" id="{{ menu_item2.id }}" {{ selected2 }}>{{ menu_item2.page_title }}</a>
            {% set next_menu_level_items2 = menu_item2.getChilds() %}
            {% if next_menu_level_items2 %}
                {{ print_menu_level2(next_menu_level_items2, page_id) }}
            {% endif %}</li>
        {% if loop.last %}
            </ul>
        {% endif %}
    {%- endfor %}
{%- endmacro %}

<div class="col-xs-12">
    <!-- form start -->
    {% for update in UpdatePages %}
    {% set page_id = update.id %}

    <form role="form" action="/admin/pages/update/{{ update.id }}" id="addForm">
        <div class="col-md-7">
            <div class="box box-primary" id="collapse_load">
                <div class="message"></div>
                <div class="box-header">
                    <h3 class="box-title">Sayfa Düzenle</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                        <div class="form-group">
                            <label for="title">Sayfa Başlığı <span class="text-red">*</span></label>
                            <input type="text" name="page_title" class="form-control validate[required]" id="title" placeholder="Sayfa Başlığı" value="{{ update.page_title }}">
                            <div class="seo_url" style="display: none;">
                                <p><strong>Kalıcı Bağlantı:</strong> http://www.webadresiniz.com/<span id="seo_url"></span>
                                </p>
                            </div>
                            <input type="hidden" name="seo_url" value="{{ update.seo_url }}" id="seo_hidden"/>
                        </div>
                        <div class="form-group">
                            <label for="editor">Sayfa İçeriği <span class="text-red">*</span></label>
                            <textarea name="page_content" id="editor" class="form-control validate[required]" placeholder="Sayfa İçeriği" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ update.page_content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_description">Seo Açıklaması</label>
                            <input type="text" name="seo_description" class="form-control" id="seo_description" placeholder="Seo Açıklaması" value="{{ update.seo_description }}">
                        </div>
                        <div class="form-group">
                            <label for="seo_keywords">Seo Anahtar Kelimeler</label>
                            <input type="text" name="seo_keywords" class="form-control" id="seo_keywords" placeholder="Seo Anahtar Kelimeler" value="{{ update.seo_keywords }}">
                        </div>
                        <div class="form-group">
                            <label for="external_url">Sayfa Dış Link</label>
                            <input type="text" name="external_url" class="form-control" id="external_url" placeholder="Sayfa Dış Link" value="{{ update.external_url }}">
                        </div>
                        <div class="form-group">
                            <label for="module_id">Sayfa Modülü</label> <br>

                            <div class="row col-xs-4">
                                <select name="module_id" class="form-control" id="module_id">
                                    <option value="">Lütfen Seçiniz</option>
                                    {% for catModule in ListModule %}
                                        {% if update.module_id == catModule.module_id %}
                                            {% set selected = "selected" %}
                                        {% else %}
                                            {% set selected = "" %}
                                        {% endif %}
                                        <option value="{{ catModule.module_id }}" {{ selected }}>{{ catModule.module_name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <br>
                        </div>
                    {% endfor %}
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" id="add" value="Düzenle">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="box box-warning" id="collapse_load">
                <div class="box-header">
                    <h3 class="box-title">Kategori Bölümü Seçimi</h3>

                    <div class="box-tools pull-right">
                        <button class="btn btn-warning btn-xs" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p>Bu bölümden, eklediğiniz sayfayla ilgili bir kategori seçebilirsiniz. Eğer sayfanız bir kategoriye ait değilse herhangi bir seçim yapılması gerekmemektedir.</p>

                    <div class="form-group">
                        <label for="news">Sayfa Kategorisi</label>

                        <div style="text-align: right"><strong><a id="cleanMenu">Temizle</a></strong></div>
                        <div class="row col-xs-7">
                            {{ print_menu_level2(ListCategories, page_id) }}
                            <input type="hidden" value="{{ page_id }}" name="page_id" id="changePageID"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer"></div>
                </div>
            </div>
        </div>
    </form>
</div>
