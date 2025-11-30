$(document).ready(function(){
    document.addEventListener("click", function (e) {
        let btn = e.target.closest(".modal-crud");
        if (!btn) return;

        let url = btn.getAttribute("data-url");
        let modal = document.getElementById("crudModal");

        // buka modal
        modal.classList.remove("hidden");

        // load konten
        fetch(url)
            .then(res => res.text())
            .then(html => {
                document.getElementById("modalContent").innerHTML = html;
            });
    });

     $(document).off("submit", ".postClass").on("submit", ".postClass", function (event) {
        event.preventDefault();
        var me = $(this);
        let href = me.attr("action");
        var form = $(".postClass");
        let formData = me.serialize();
        let table = $("#tableResult").attr("action");
        var windowId = me.closest('.windowContainer').first().attr('windowId');
        var tableAttr = me.attr('dataTableId');
        var tableId = $(tableAttr);
        var dataTable = $("#table").DataTable();
        form.find(".help-block").remove();
        form.find(".form-floating").removeClass("has-error");
        $.ajax({
            type: "post",
            url: href,
            data: formData,
            success: function (result) {
                tableId.DataTable().draw(false);
                $('#'+windowId+"").PopupWindow('close');
                tableId.DataTable().ajax.reload(null, false);
                $("#formModal").modal("hide");
                Swal.fire({
                    confirmButtonColor: "#2600FF",
                    title: "Success!",
                    text: "Data Telah Berhasil Disimpan",
                    icon: "success",
                    timer : 1000
                });
                // document.getElementById('subViewData').click();
            },
            error: function (xhr) {
                var res = xhr.responseJSON;
                // console.log('ini error',res);
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $("#" + key)
                            Swal.fire({
                                icon: "error",
                                title: "Opps!",
                                text: value,
                                confirmButtonColor: "#2600FF",
                                timer: 1500
                            })
                    });
                }
            },
        });
    });
})
