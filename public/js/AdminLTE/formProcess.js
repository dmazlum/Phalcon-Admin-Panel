/**
 * Created by devrim on 2/11/2015.
 */

//Tüm Editleme Formlarını Kapanır Şekilde Getirir
$(document).ready(function () {

    //Find the box parent
    var box = $("#collapse_load").first();

    //Find the body and the footer
    var bf = box.find(".box-body, .box-footer");

    if (box.hasClass("collapsed-box")) {
        //box.addClass("collapsed-box");
        //Convert minus into plus
        $(this).children(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
        bf.slideUp();
    } else {
        box.removeClass("collapsed-box");
        //Convert plus into minus
        $(this).children(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
        bf.slideDown();
    }
});

/**
 * Modul Durumu Değişikliği
 * @param int id
 * @param int val
 */
function moduleDeactive(id, val) {

//Stop form from submitting normally
    event.preventDefault();

    if (confirm('Bu modülün durumunu değiştirmek istiyor musunuz?')) {

        if (val != 1) {
            $.post("/admin/controlpanel/modules/disable", {id: id})
                .done(function (data) {
                    //console.log(data);
                    location.reload();
                })
                .fail(function (error) {
                    console.log(error);
                })
        } else {
            $.post("/admin/controlpanel/modules/enable", {id: id})
                .done(function (data) {
                    location.reload();
                })
                .fail(function (error) {
                    console.log(error);
                })
        }
    } else {
        // Do nothing!
    }
}

$('input[name=seq]').on('change', function () {
    $("input[name=fieldID]").attr('checked', 'checked');
});