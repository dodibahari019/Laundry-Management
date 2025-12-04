<div id="crudModal2" class="hidden fixed inset-0 bg-black bg-opacity-60 z-[60] flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold">Pelanggan Baru</h2>
            <button onclick="closeCrudModal2()" class="text-gray-500 hover:text-gray-700">
                ✕
            </button>
        </div>

        <div id="modalContent2"></div>
    </div>
</div>

<script>
function closeCrudModal2() {
    document.getElementById("crudModal2").classList.add("hidden");
}
</script>
