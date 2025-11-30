$(document).ready(function(){
     $(document).on("keyup", ".classRp", function () {
        var v = $(this).val();
        var q = formatRupiah(v);
        $(this).val(q);
    });
})
