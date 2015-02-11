/**
 * Created by devrim on 2/11/2015.
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