@extends('layouts.frame')
@section('Title', 'Order')
@section('CssSection')

@endsection
@section('HeaderTitle', 'Manajemen Order')
@section('Description', 'Kelola pesanan laundry dari pelanggan')
@section('MainContentArea')
    <!-- Filter & Search Section -->
    <div class="bg-white rounded-2xl p-6 mb-6 border border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <!-- Search -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Cari Order</label>
                <div class="relative">
                    <input id="searchOrder" type="text" placeholder="Cari Kode order atau nama pelanggan..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Filter Status -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select id="filterStatus" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                    <option value="">Semua Status</option>
                    <option value="menunggu">Menunggu</option>
                    <option value="diproses">Diproses</option>
                    <option value="dicuci">Dicuci</option>
                    <option value="disetrika">Disetrika</option>
                    <option value="ready">Ready</option>
                    <option value="diambil">Diambil</option>
                </select>
            </div>

            <!-- Filter Tanggal -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal</label>
                <input id="filterTanggal" type="date" value="{{ $currentlyDate }}" class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
            </div>

            <!-- Button Add -->
            <div class="flex items-end">
                <button onclick="openAddOrderModal()" class="w-full px-4 py-2.5 gradient-primary text-white rounded-xl font-semibold hover:shadow-lg transition flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>Order Baru</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
        <!-- Total Order -->
        <div class="bg-white rounded-2xl p-5 border border-gray-100 hover-scale">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mb-1">Total Order</p>
            <h3 class="text-xl font-bold text-purple-900">{{$totalOrder}}</h3>
        </div>

        <!-- Menunggu -->
        <div class="bg-white rounded-2xl p-5 border border-gray-100 hover-scale">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mb-1">Menunggu</p>
            <h3 class="text-xl font-bold text-yellow-600">{{$totalMenunggu}}</h3>
        </div>

        <!-- Diproses -->
        <div class="bg-white rounded-2xl p-5 border border-gray-100 hover-scale">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mb-1">Diproses, Dicuci, Disetrika</p>
            <h3 class="text-xl font-bold text-blue-600">{{$totalDiproses}}</h3>
        </div>

        <!-- Ready -->
        <div class="bg-white rounded-2xl p-5 border border-gray-100 hover-scale">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mb-1">Ready</p>
            <h3 class="text-xl font-bold text-green-600">{{$totalReady}}</h3>
        </div>

        <!-- Selesai -->
        <div class="bg-white rounded-2xl p-5 border border-gray-100 hover-scale">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 mb-1">Diambil</p>
            <h3 class="text-xl font-bold text-red-600">{{$totalDiambil}}</h3>
        </div>
    </div>

    <!-- Table Orders -->
    <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-200 flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-gray-900">Daftar Order</h2>
                <p class="text-sm text-gray-500 mt-1">Menampilkan {{ $totalOrder }} order aktif</p>
            </div>
            {{-- <div class="flex space-x-3">
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition font-medium text-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span>Export</span>
                </button>
                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition font-medium text-sm flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                    </svg>
                    <span>Print</span>
                </button>
            </div> --}}
        </div>

        <div class="overflow-x-auto">
            @include('orders.table')
        </div>

        <!-- Pagination -->
        <div class="p-6 border-t border-gray-200 flex items-center justify-between">
            <div class="text-sm text-gray-600">
                {{-- Menampilkan <span class="font-semibold">1-10</span> dari <span class="font-semibold">247</span> order --}}
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50" disabled>
                    Previous
                </button>
                <button class="px-3 py-2 bg-purple-600 text-white rounded-lg text-sm font-semibold">1</button>
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">2</button>
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">3</button>
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">
                    Next
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Add Order -->
    <div id="addOrderModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200 flex items-center justify-between sticky top-0 bg-white z-10">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Order Baru</h2>
                    <p class="text-sm text-gray-500 mt-1">Buat pesanan laundry baru</p>
                </div>
                <button onclick="closeAddOrderModal()" class="text-gray-400 hover:text-gray-600">
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
                            <p class="text-sm text-gray-600 mb-1">ID Order</p>
                            <p class="text-2xl font-bold gradient-text">OR-2024110029</p>
                        </div>
                        <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-sm">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Pelanggan & Layanan -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pelanggan *</label>
                        <select id="selectPelanggan" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                            <option value="">-- Pilih Pelanggan --</option>
                            <option value="PL001">Budi Santoso - 0812-3456-7890</option>
                            <option value="PL002">Siti Aminah - 0813-9876-5432</option>
                            <option value="PL003">Ahmad Hidayat - 0856-7890-1234</option>
                            <option value="PL004">Dewi Lestari - 0821-4567-8901</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Layanan *</label>
                        <select id="selectLayanan" onchange="hitungTotal()" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                            <option value="">-- Pilih Layanan --</option>
                            <option value="LY001" data-harga="5000" data-jenis="kiloan">Cuci Kering - Rp 5.000/kg</option>
                            <option value="LY002" data-harga="8000" data-jenis="kiloan">Cuci + Setrika - Rp 8.000/kg</option>
                            <option value="LY003" data-harga="15000" data-jenis="kiloan">Express 6 Jam - Rp 15.000/kg</option>
                            <option value="LY004" data-harga="4000" data-jenis="kiloan">Setrika Saja - Rp 4.000/kg</option>
                            <option value="LY005" data-harga="25000" data-jenis="satuan">Cuci Jas - Rp 25.000/pcs</option>
                            <option value="LY006" data-harga="50000" data-jenis="satuan">Cuci Karpet - Rp 50.000/m²</option>
                        </select>
                    </div>
                </div>

                <!-- Berat/Jumlah & Estimasi -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <span id="labelBerat">Berat (kg)</span> *
                        </label>
                        <input type="number" id="inputBerat" step="0.1" placeholder="0" onchange="hitungTotal()" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Masuk *</label>
                        <input type="date" id="tanggalMasuk" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Estimasi Selesai *</label>
                        <input type="date" id="estimasiSelesai" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                    </div>
                </div>

                <!-- Catatan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Catatan Khusus</label>
                    <textarea rows="3" placeholder="Tambahkan catatan khusus (opsional)..." class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500"></textarea>
                </div>

                <!-- Ringkasan Pembayaran -->
                <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Ringkasan Pembayaran</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span id="subtotal" class="font-semibold text-gray-900">Rp 0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Biaya Tambahan</span>
                            <span class="font-semibold text-gray-900">Rp 0</span>
                        </div>
                        <div class="pt-3 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-gray-900">Total</span>
                                <span id="totalHarga" class="text-2xl font-bold gradient-text">Rp 0</span>
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
                    <button type="button" onclick="closeAddOrderModal()" class="px-6 py-3 border border-gray-300 rounded-xl text-gray-700 font-semibold hover:bg-gray-50 transition">
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
        </div>
    </div>

@endsection
@section('JavascriptSection')
<script>
    function updateTableOrders(res) {
        let html = '';

        if (res.data && res.data.length > 0) {
            res.data.forEach((x, index) => {
                // Nomor urut
                let nomor = (res.current_page - 1) * res.per_page + index + 1;

                let jenisColor = $x.jenis == 'kiloan'? 'bg-blue-100 text-blue-700': 'bg-purple-100 text-purple-700';
                let beratQty = $x.jenis == 'kiloan'? $x.berat : $x.jumlah;
                let satuan = $x.jenis == 'kiloan'? 'Kg' : 'Pcs';

                let statusLaundry = $x.status_order;
                let statusColor = 'bg-yellow-100 text-yellow-700';
                if(statusLaundry == 'menunggu'){
                    statusColor = 'bg-yellow-100 text-yellow-700';
                } else if(statusLaundry == 'diproses'){
                    statusColor = 'bg-blue-100 text-blue-700';
                } else if(statusLaundry == 'dicuci'){
                    statusColor = 'bg-orange-100 text-orange-700';
                } else if(statusLaundry == 'disetrika'){
                    statusColor = 'bg-purple-100 text-purple-700';
                } else if(statusLaundry == 'ready'){
                    statusColor = 'bg-green-100 text-green-700';
                } else {
                    statusColor = 'bg-red-100 text-red-700';
                }

                let icon = html = ``;
                if($x.status_order == 'diambil'){
                    icon = '<svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>`''
                } else {
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                }

                html += `
                 <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <span class="font-semibold text-gray-900">${nomor}</span>
                    </td>
                    <td class="py-4 px-6">
                        <div>
                            <p class="font-semibold text-purple-600">#${x.kode_order}</p>
                            <p class="text-xs text-gray-500">${formatTanggal(x.tanggal_selesai)}</p>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div>
                            <p class="font-semibold text-gray-900">${x.nama}</p>
                            <p class="text-xs text-gray-500">${x.no_hp}</p>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div>
                            <p class="text-sm font-medium text-gray-900">${x.nama_layanan}</p>
                            <p class="text-xs text-gray-500">${x.jenis}</p>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <span class="${$jenisColor} px-3 py-1 rounded-full text-xs font-bold">${(Number(beratQty)).toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 })} ${satuan}</span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <p class="font-bold text-gray-900">Rp ${(Number(x.harga)).toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}</p>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex justify-center">
                            <span class="${statusColor} px-3 py-1 rounded-full text-xs font-bold">${x.status_order}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center space-x-2">

                            @php
                                $estimasi = $x->status_order == 'diambil'? 'Selesai' : \Carbon\Carbon::parse($x->tanggal_selesai)->format('d M Y');
                            @endphp
                            <span class="text-sm text-gray-900">{{ $estimasi }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center space-x-2">
                            <button onclick="openDetailOrder('OR-001247')" class="text-blue-600 hover:text-blue-800 p-1" title="Detail">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button onclick="openEditOrder('OR-001247')" class="text-green-600 hover:text-green-800 p-1" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                            <button onclick="confirmDelete('OR-001247')" class="text-red-600 hover:text-red-800 p-1" title="Hapus">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                `;
            });
        } else {
            html = `<tr><td colspan="7" class="text-center py-4 text-gray-500">Data tidak ditemukan</td></tr>`;
        }

        $('#idBodyTableOrders').html(html);
    }

    function updateInfoOrders(res) {
        // Update jumlah layanan
        $('#jumlahLayananInfo').html(
            `Menampilkan ${res.total} layanan`
        );

        // Update pagination
        let paginationHtml = '';

        // Previous
        if (res.current_page > 1) {
            paginationHtml += `<button data-page="${res.current_page - 1}" class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">Previous</button>`;
        } else {
            paginationHtml += `<button disabled class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50 opacity-50">Previous</button>`;
        }

        // Page numbers
        for (let page = 1; page <= res.last_page; page++) {
            paginationHtml += `<button data-page="${page}" class="px-3 py-2 rounded-lg text-sm font-semibold ${res.current_page == page ? 'bg-purple-600 text-white' : 'border text-gray-600 hover:bg-gray-50'}">${page}</button>`;
        }

        // Next
        if (res.current_page < res.last_page) {
            paginationHtml += `<button data-page="${res.current_page + 1}" class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">Next</button>`;
        } else {
            paginationHtml += `<button disabled class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50 opacity-50">Next</button>`;
        }

        $('#paginationContainer').html(paginationHtml);
    }

    // Event delegation untuk pagination
    $(document).on('click', '#paginationContainer button[data-page]', function() {
        let page = $(this).data('page');
        fetchDataorders(page); // panggil fetchDataorders dengan page tertentu
    });


    // Event delegation untuk pagination
    $(document).on('click', '.page-btn', function() {
        let page = $(this).data('page');
        fetchDataorders(page);
    });

    let timer;
    function fetchDataorders(page = 1) {
        clearTimeout(timer);
        timer = setTimeout(() => {
            let order = $('#searchOrder').val();
            let status = $('#filterStatus').val();
            let tanggal = $('#filterTanggal').val();

            $.ajax({
                url: '/orders/search',
                type: 'GET',
                data: { order: order, status: status, tanggal: tanggal, page: page },
                success: function(res) {
                    updateTableOrders(res);
                    updateInfoOrders(res);
                },
                error: function(err) {
                    console.error(err);
                }
            });
        }, 400);
    }

    // Event listener
    $('#searchOrder, #filterStatus, #filterTanggal').on('keyup change', () => fetchDataorders());
</script>
@endsection
