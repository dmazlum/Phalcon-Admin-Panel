<div class="col-md-10">
    <div class="box box-primary" id="collapse_load">
        <div class="message"></div>
        <div class="box-header">
            <h3 class="box-title">İletişim Bilgisi Ekleme Formu</h3>

            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {% for contact in listContact %}
        <form role="form" action="/admin/contact/update/{{ contact.id }}" id="addForm">
            <div class="box-body">
                <div class="form-group">
                    <label for="news">Firma Ünvanı</label>
                    <input type="text" name="company" class="form-control" id="news" placeholder="Firma Ünvanı" value="{{ contact.company }}">
                </div>
                <div class="form-group">
                    <label for="editor">Firma Adresi</label>
                    <textarea name="address" id="editor" class="form-control" placeholder="Firma Adresi" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ contact.address }}</textarea>
                </div>
                <div class="form-group">
                    <label>Telefon Numarası</label>
                    <input type="text" name="phone" class="form-control validate[optional,maxSize[20] custom[onlyNumberSp]]" id="tel1" placeholder="Telefon Numarası" value="{{ contact.phone }}">
                </div>
                <div class="form-group">
                    <label>Telefon Numarası #2</label>
                    <input type="text" name="phone2" class="form-control validate[optional,maxSize[20] custom[onlyNumberSp]]" id="tel2" placeholder="Telefon Numarası 2" value="{{ contact.phone2 }}">
                </div>
                <div class="form-group">
                    <label>Cep Numarası</label>
                    <input type="text" name="mobile" class="form-control validate[optional,maxSize[20] custom[onlyNumberSp]]" id="mobile" placeholder="Cep Telefonu Numarası" value="{{ contact.mobile }}">
                </div>
                <div class="form-group">
                    <label>Faks Numarası</label>
                    <input type="text" name="fax" class="form-control validate[optional,maxSize[20] custom[onlyNumberSp]]" id="fax" placeholder="Faks Numarası" value="{{ contact.fax }}">
                </div>
                <div class="form-group">
                    <label>Web Adresi</label>
                    <input type="text" name="web" class="form-control validate[custom[url]]" id="web" placeholder="www.sirketadresi.com" value="{{ contact.web }}">
                </div>
                <div class="form-group">
                    <label>E-Mail Adresi</label>
                    <input type="text" name="email" class="form-control validate[custom[email]]" id="email" placeholder="E-Mail Adresi" value="{{ contact.email }}">
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="submit" class="btn btn-primary" id="add" value="Güncelle">
            </div>
        </form>
        {% endfor %}
    </div>
</div>