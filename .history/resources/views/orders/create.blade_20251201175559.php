<div class="p-6 border-b border-gray-200 flex items-center justify-between sticky top-0 bg-white z-10">
    <div>
        <h2 class="text-2xl font-bold text-gray-900">Order Baru</h2>
        <p class="text-sm text-gray-500 mt-1">Buat pesanan laundry baru</p>
    </div>
    <button onclick="closeCrudModal()" class="text-gray-400 hover:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<form class="p-6 space-y-6">
    <!-- ID Order (Auto) -->
    <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-4 rounded-xl border border-purple-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600 mb-1">Kode Order</p>
                <p class="text-2xl font-bold gradient-text">OR-20251201-001</p>
            </div>
            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm">
                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Pelanggan & Layanan -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="col-span-3">
            <label class="block text-sm font-medium text-gray-700 mb-2">Pelanggan *</label>
            <select id="selectPelanggan" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($dataPelanggan as $p)
                    <option value="{{ $p->id_pelanggan }}">{{$p->nama}} - {{$p->no_hp}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-1 flex items-end">
            <button type="button" onclick="ButtonCreatePelangganBaru();" class="w-full px-4 py-3 gradient-primary text-white rounded-xl font-semibold hover:shadow-lg transition flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span>Tambah</span>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
         <div class="col-span-3">
            <label class="block text-sm font-medium text-gray-700 mb-2">Layanan *</label>
            <select id="selectLayanan" onchange="ChooseSatuan(this)" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                <option value="">-- Pilih Layanan --</option>
                @foreach($dataLayanan as $l)
                    <option value="{{$l->id_layanan}}" data-harga="{{$l->harga}}" data-durasi="{{$l->durasi}}" data-jenis="{{$l->jenis}}">{{$l->nama_layanan}} - Rp {{number_format($l->harga,0,',' , '.')}}/{{$l->jenis == 'kiloan'? 'Kg' : 'Pcs'}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                <span id="labelBerat">Berat (kg)</span> *
            </label>
            <input disabled name="berat" id="id_berat" type="text" placeholder="0" class="classRp w-full text-right pr-2 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
        </div>
        <div class="col-span-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">
                <span id="labelQty">Qty (pcs)</span> *
            </label>
            <input disabled name="qty" id="id_qty" type="text" placeholder="0" class="classRp w-full text-right pr-2 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Masuk *</label>
            <input type="date" value="{{$currentlyDate}}" disabled name="tanggal_masuk" id="tanggalMasuk" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Estimasi Selesai *</label>
            <input type="date" value="{{$currentlyDate}}" disabled name="tanggal_selesai" id="tanggalSelesai" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
        </div>
    </div>

    <!-- Catatan -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Catatan</label>
        <textarea rows="3" nama="" placeholder="Tambahkan catatan khusus (opsional)..." class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500"></textarea>
    </div>

    <!-- Ringkasan Pembayaran -->
    <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Ringkasan Pembayaran</h3>
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-gray-600">Cuci Bersih + Setrika</span>
                <span class="text-gray-600">3.5 * Rp15.000,-</span>
                <span id="subtotal" class="font-semibold text-gray-900">Rp45.000,-</span>
            </div>
            <div class="pt-3 border-t border-gray-300">
                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold text-gray-900">Total</span>
                    <span id="totalHarga" class="text-2xl font-bold gradient-text">Rp45.000,-</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Metode Pembayaran -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-3">Metode Pembayaran *</label>
        <div class="grid grid-cols-3 gap-4">
            <label class="relative cursor-pointer">
                <input type="radio" name="metode" value="cash" class="peer sr-only" checked>
                <div class="p-4 border-2 border-gray-300 rounded-xl peer-checked:border-purple-600 peer-checked:bg-purple-50 transition">
                    <div class="flex flex-col items-center space-y-2">
                        <svg class="w-8 h-8 text-gray-400 peer-checked:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="font-semibold text-gray-700">Cash</span>
                    </div>
                </div>
            </label>
            <label class="relative cursor-pointer">
                <input type="radio" name="metode" value="transfer" class="peer sr-only">
                <div class="p-4 border-2 border-gray-300 rounded-xl peer-checked:border-purple-600 peer-checked:bg-purple-50 transition">
                    <div class="flex flex-col items-center space-y-2">
                        <svg class="w-8 h-8 text-gray-400 peer-checked:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                        <span class="font-semibold text-gray-700">Transfer</span>
                    </div>
                </div>
            </label>
            <label class="relative cursor-pointer">
                <input type="radio" name="metode" value="qris" class="peer sr-only">
                <div class="p-4 border-2 border-gray-300 rounded-xl peer-checked:border-purple-600 peer-checked:bg-purple-50 transition">
                    <div class="flex flex-col items-center space-y-2">
                        <svg class="w-8 h-8 text-gray-400 peer-checked:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                        </svg>
                        <span class="font-semibold text-gray-700">QRIS</span>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
        <button type="button" onclick="closeCrudModal()" class="px-6 py-3 border border-gray-300 rounded-xl text-gray-700 font-semibold hover:bg-gray-50 transition">
            Batal
        </button>
        <button type="submit" class="px-8 py-3 gradient-primary text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Buat Order</span>
        </button>
    </div>
</form>
