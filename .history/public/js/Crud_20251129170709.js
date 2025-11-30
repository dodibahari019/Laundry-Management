$(document).ready(function(){
    document.addEventListener("click", function (e) {
        if (e.target.closest(".modal-crud")) {
            let btn = e.target.closest(".modal-crud");
            let url = btn.getAttribute("data-url");
            let modalId = btn.getAttribute("data-modal");
            let modal = document.getElementById(modalId);

            // Tampilkan modal
            modal.classList.remove("hidden");

            // Load konten
            fetch(url)
                .then(res => res.text())
                .then(html => {
                    document.getElementById("modalContent").innerHTML = html;
                });
        }
    });

})