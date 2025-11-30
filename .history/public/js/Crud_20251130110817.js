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

    $(document).off("submit", ".classCreateForm").on("submit", ".classCreateForm", function (e) {
        e.preventDefault();
        let me = $(this);
        let action = me.attr('action');
        let tableSelector = me.data('table-id');
        let tableBody = $(tableSelector + ' tbody');
        let formData = me.serialize();

        $.ajax({
            url: action,
            type: 'POST',
            data: formData,
            success: function(res) {
                if(res.success) {
                    // Buat row baru
                    let rowHtml = '<tr>';
                    for (const key in res.data) {
                        rowHtml += `<td>${res.data[key]}</td>`;
                    }
                    rowHtml += '</tr>';

                    tableBody.prepend(rowHtml);

                    // Reset form & tutup modal jika ada
                    me[0].reset();
                    if(me.closest('#crudModal').length){
                        me.closest('#crudModal').hide();
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses!',
                        text: 'Data berhasil disimpan',
                        timer: 1000,
                        showConfirmButton: false
                    });
                }
            },
            error: function(xhr) {
                let res = xhr.responseJSON;
                if(res && res.errors){
                    $.each(res.errors, function(k,v){
                        Swal.fire({ icon:'error', title:'Oops!', text:v });
                    });
                }
            }
        });
    });

})
