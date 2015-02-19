/**
 * Created by devrim on 2/11/2015.
 */

$(document).ready(function () {

    ////Find the box parent
    //var box = $("#collapse_load").first();
    //
    ////Find the body and the footer
    //var bf = box.find(".box-body, .box-footer");
    //
    //if (box.hasClass("collapsed-box")) {
    //    //box.addClass("collapsed-box");
    //    //Convert minus into plus
    //    $(this).children(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
    //    bf.slideUp();
    //} else {
    //    box.removeClass("collapsed-box");
    //    //Convert plus into minus
    //    $(this).children(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
    //    bf.slideDown();
    //}
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
                .done(function () {
                    //console.log(data);
                    location.reload();
                })
                .fail(function (error) {
                    console.log(error);
                })
        } else {
            $.post("/admin/controlpanel/modules/enable", {id: id})
                .done(function () {
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

/**
 * Kayıt Durumu Değişikliği
 * @param int id
 * @param string val
 */
function recordAction(id, status, val) {

//Stop form from submitting normally
    event.preventDefault();

    if (confirm('Bu kaydın durumunu değiştirmek istiyor musunuz?')) {

        if (status != 1) {
            $.post("/admin/"+val, {id: id})
                .done(function () {
                    //console.log(data);
                    location.reload();
                })
                .fail(function (error) {
                    console.log(error);
                })
        } else {
            $.post("/admin/"+val, {id: id})
                .done(function () {
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

/* Add Function */
$(function () {
    $('#addForm').submit(function (e) {
        e.preventDefault();

        $(".message").hide();

        jQuery('input').attr('data-prompt-position', 'bottomLeft');
        jQuery('input').data('promptPosition', 'bottomLeft');
        jQuery('textarea').attr('data-prompt-position', 'bottomLeft');
        jQuery('textarea').data('promptPosition', 'bottomLeft');
        jQuery('select').attr('data-prompt-position', 'bottomLeft');
        jQuery('select').data('promptPosition', 'bottomLeft');

        //if invalid do nothing
        if (!$('#addForm').validationEngine('validate')) {
            return false;
        }

        var form = document.getElementById('addForm');
        var formData = new FormData(form);
        var formUrl = $("#addForm").attr('action');

        $.ajax({
            type: "POST",
            url: formUrl,
            data: formData,
            async: false,
            success: function (data) {
                $(".message").html(data);
                $(".message").fadeIn("slow");
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            },
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
    });
});

/* Delete Function */
$('#delete').click(function () {

    event.preventDefault();

    var DeleteUrl = $("input[name=DeleteURL]").val();
    var count_checked = $("[name='fieldID[]']:checked").length; // count the checked

    if (count_checked == 0) {
        alert("Lütfen bir kayıt seçiniz");
        return false;
    }

    if (count_checked > 0) {
        if (confirm("Kayıtları silmek istiyor musunuz?")) {
            $.post(DeleteUrl, $("[name='fieldID[]']:checked").serialize(), function () {
                location.reload();
            });
        }
    }
});

/* Order Function */
$('#order').click(function () {

    event.preventDefault();

    var OrderUrl = $("input[name=SeqURL]").val();
    var OrderFields = $("input[name='seq[]'], [name='seqID[]']").serialize();

    if (OrderFields != '') {
        if (confirm("Kayıtları sıralamak istiyor musunuz?")) {
            $.post(OrderUrl, OrderFields, function (data) {
                location.reload();
                //console.log(data);
            });
        }
    }
});
