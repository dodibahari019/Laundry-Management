@extends('layouts.frame')
@section('title', 'Orders')
@section('HeaderTitle', 'Order Laundry')
@section('Description', )
@section('MainContentArea')
<!-- Tab Navigation -->
<div class="bg-white rounded-2xl p-2 mb-8 border border-gray-200 flex space-x-2">
    <button class="tab-button active flex-1 px-6 py-3 rounded-xl font-semibold text-sm transition" data-tab="data-order">
        <div class="flex items-center justify-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            <span>Data Order</span>
        </div>
    </button>
    <button class="tab-button flex-1 px-6 py-3 rounded-xl font-semibold text-sm text-gray-600 hover:bg-gray-100 transition" data-tab="tambah-order">
        <div class="flex items-center justify-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span>Tambah Order</span>
        </div>
    </button>
    <button class="tab-button flex-1 px-6 py-3 rounded-xl font-semibold text-sm text-gray-600 hover:bg-gray-100 transition" data-tab="update-data">
        <div class="flex items-center justify-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            <span>Update Data</span>
        </div>
    </button>
    <button class="tab-button flex-1 px-6 py-3 rounded-xl font-semibold text-sm text-gray-600 hover:bg-gray-100 transition" data-tab="update-status">
        <div class="flex items-center justify-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Update Status</span>
        </div>
    </button>
</div>

<!-- Tab Content -->
<div class="tab-content">
    
    <!-- TAB 1: DATA ORDER -->
    <div id="data-order" class="tab-pane active fade-in">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Total Order</h3>
                <p class="text-3xl font-bold text-gray-900">842</p>
            </div>

            <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Dalam Proses</h3>
                <p class="text-3xl font-bold text-gray-900">12</p>
            </div>

            <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Selesai</h3>
                <p class="text-3xl font-bold text-gray-900">816</p>
            </div>

            <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Terlambat</h3>
                <p class="text-3xl font-bold text-gray-900">14</p>
            </div>
        </div>

        <!-- Filter & Search Section -->
        <div class="bg-white rounded-2xl p-6 mb-6 border border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Cari Order</label>
                    <div class="relative">
                        <input type="text" placeholder="Cari nama customer atau nomor invoice..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Filter Status -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                        <option>Semua Status</option>
                        <option>Masuk</option>
                        <option>Dicuci</option>
                        <option>Dijemur</option>
                        <option>Disetrika</option>
                        <option>Selesai</option>
                        <option>Diambil</option>
                    </select>
                </div>

                <!-- Filter Layanan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Layanan</label>
                    <select class="w-full px-4 py-2.5 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                        <option>Semua Layanan</option>
                        <option>Cuci Kering</option>
                        <option>Cuci Setrika</option>
                        <option>Setrika Saja</option>
                        <option>Express</option>
                        <option>Satuan</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table Order -->
        <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Daftar Order</h2>
                    <p class="text-sm text-gray-500 mt-1">Menampilkan 50 dari 842 order</p>
                </div>
                <div class="flex space-x-3">
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
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">No. Invoice</th>
                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Customer</th>
                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Layanan</th>
                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Berat/Item</th>
                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Status</th>
                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Estimasi</th>
                            <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Total</th>
                            <th class="text-center py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <span class="font-semibold text-gray-900">#LDY-1027</span>
                                <p class="text-xs text-gray-500">29 Nov 2024</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-medium text-gray-900">Rina Kusuma</p>
                                <p class="text-xs text-gray-500">0812-3456-7890</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">Cuci Kering Express</p>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-sm font-semibold text-gray-900">7 kg</span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Dicuci</span>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">30 Nov 2024</p>
                                <p class="text-xs text-gray-500">14:00 WIB</p>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <p class="font-bold text-gray-900">Rp 105.000</p>
                                <p class="text-xs text-green-600">Lunas</p>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 p-1" title="Lihat Detail">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-600 hover:text-green-800 p-1" title="Edit">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 p-1" title="Hapus">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <span class="font-semibold text-gray-900">#LDY-1026</span>
                                <p class="text-xs text-gray-500">29 Nov 2024</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-medium text-gray-900">Dewi Lestari</p>
                                <p class="text-xs text-gray-500">0813-2345-6789</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">Cuci + Setrika</p>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-sm font-semibold text-gray-900">4 kg</span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Selesai</span>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">29 Nov 2024</p>
                                <p class="text-xs text-gray-500">16:00 WIB</p>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <p class="font-bold text-gray-900">Rp 32.000</p>
                                <p class="text-xs text-green-600">Lunas</p>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-600 hover:text-green-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <span class="font-semibold text-gray-900">#LDY-1025</span>
                                <p class="text-xs text-gray-500">29 Nov 2024</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-medium text-gray-900">Ahmad Fauzi</p>
                                <p class="text-xs text-gray-500">0811-9876-5432</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">Cuci Satuan - Jas</p>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-sm font-semibold text-gray-900">2 pcs</span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Disetrika</span>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">30 Nov 2024</p>
                                <p class="text-xs text-gray-500">10:00 WIB</p>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <p class="font-bold text-gray-900">Rp 50.000</p>
                                <p class="text-xs text-red-600">Belum Bayar</p>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-600 hover:text-green-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <span class="font-semibold text-gray-900">#LDY-1024</span>
                                <p class="text-xs text-gray-500">28 Nov 2024</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-medium text-gray-900">Siti Aminah</p>
                                <p class="text-xs text-gray-500">0814-5678-9012</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">Cuci Kering</p>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-sm font-semibold text-gray-900">3 kg</span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Selesai</span>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">28 Nov 2024</p>
                                <p class="text-xs text-gray-500">18:00 WIB</p>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <p class="font-bold text-gray-900">Rp 30.000</p>
                                <p class="text-xs text-green-600">Lunas</p>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-600 hover:text-green-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-6">
                                <span class="font-semibold text-gray-900">#LDY-1023</span>
                                <p class="text-xs text-gray-500">28 Nov 2024</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-medium text-gray-900">Budi Santoso</p>
                                <p class="text-xs text-gray-500">0815-1234-5678</p>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">Cuci + Setrika Express</p>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-sm font-semibold text-gray-900">5 kg</span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">Masuk</span>
                            </td>
                            <td class="py-4 px-6">
                                <p class="text-sm text-gray-900">29 Nov 2024</p>
                                <p class="text-xs text-gray-500">08:00 WIB</p>
                            </td>
                            <td class="py-4 px-6 text-right">
                                <p class="font-bold text-gray-900">Rp 75.000</p>
                                <p class="text-xs text-green-600">Lunas</p>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-600 hover:text-green-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 p-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="p-6 border-t border-gray-200 flex items-center justify-between">
                <div class="text-sm text-gray-600">
                    Menampilkan <span class="font-semibold">1-5</span> dari <span class="font-semibold">842</span> order
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50" disabled>
                        Previous
                    </button>
                    <button class="px-3 py-2 bg-purple-600 text-white rounded-lg text-sm font-semibold">1</button>
                    <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">2</button>
                    <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">3</button>
                    <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">...</button>
                    <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">169</button>
                    <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-50">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- TAB 2: TAMBAH ORDER -->
    <div id="tambah-order" class="tab-pane" style="display:none;">
        <div class="bg-white rounded-2xl p-8 border border-gray-100">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Tambah Order Baru</h2>
                <p class="text-gray-600">Isi form di bawah untuk menambahkan order laundry baru</p>
            </div>

            <form class="space-y-8">
                <!-- Data Pelanggan Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Data Pelanggan
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Pelanggan *</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                                <option value="">-- Pilih Pelanggan --</option>
                                <option>Budi Santoso (0815-1234-5678)</option>
                                <option>Siti Aminah (0814-5678-9012)</option>
                                <option>Ahmad Fauzi (0811-9876-5432)</option>
                                <option>Dewi Lestari (0813-2345-6789)</option>
                                <option>Rina Kusuma (0812-3456-7890)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Atau Tambah Pelanggan Baru</label>
                            <button type="button" class="w-full px-4 py-3 border-2 border-dashed border-purple-300 rounded-xl text-purple-600 hover:bg-purple-50 transition font-medium flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span>Tambah Pelanggan Baru</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Detail Order Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Detail Order
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Layanan *</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                                <option value="">-- Pilih Layanan --</option>
                                <option>Cuci Kering (Rp 5.000/kg)</option>
                                <option>Cuci Setrika (Rp 8.000/kg)</option>
                                <option>Setrika Saja (Rp 4.000/kg)</option>
                                <option>Express (Rp 15.000/kg)</option>
                                <option>Cuci Satuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Berat / Jumlah *</label>
                            <div class="relative">
                                <input type="number" placeholder="0" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                                <span class="absolute right-4 top-3 text-gray-500 font-medium">kg</span>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Estimasi Selesai *</label>
                            <input type="datetime-local" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                        </div>
                    </div>
                </div>

                <!-- Detail Tambahan Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        Detail Tambahan
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Catatan Khusus</label>
                            <textarea rows="4" placeholder="Contoh: Pisahkan pakaian putih, jangan gunakan pewangi..." class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500"></textarea>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Diskon</label>
                                <div class="flex space-x-3">
                                    <input type="number" placeholder="0" class="flex-1 px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                                    <select class="px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                                        <option>%</option>
                                        <option>Rp</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Status Pembayaran</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                                    <option>Belum Bayar</option>
                                    <option>DP (Down Payment)</option>
                                    <option>Lunas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ringkasan Pembayaran -->
                <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 border-2 border-purple-100">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Ringkasan Pembayaran</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-semibold text-gray-900">Rp 0</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Diskon</span>
                            <span class="font-semibold text-red-600">- Rp 0</span>
                        </div>
                        <div class="border-t-2 border-purple-200 pt-3 flex justify-between">
                            <span class="font-bold text-gray-900">Total Bayar</span>
                            <span class="font-bold text-2xl gradient-text">Rp 0</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                    <button type="button" class="px-6 py-3 border border-gray-300 rounded-xl text-gray-700 font-semibold hover:bg-gray-50 transition">
                        Reset Form
                    </button>
                    <button type="submit" class="px-8 py-3 gradient-primary text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Simpan Order</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- TAB 3: UPDATE DATA -->
    <div id="update-data" class="tab-pane" style="display:none;">
        <div class="bg-white rounded-2xl p-8 border border-gray-100">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Update Data Order</h2>
                <p class="text-gray-600">Cari dan edit data order yang sudah ada</p>
            </div>

            <!-- Search Order -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-700 mb-2">Cari Order berdasarkan Invoice</label>
                <div class="flex space-x-3">
                    <div class="flex-1 relative">
                        <input type="text" placeholder="Masukkan nomor invoice (contoh: LDY-1027)" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <button class="px-6 py-3 gradient-primary text-white rounded-xl font-semibold hover:shadow-lg transition flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span>Cari</span>
                    </button>
                </div>
            </div>

            <!-- Form Update (Initially Hidden) -->
            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-12 text-center">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Cari Order untuk di-update</h3>
                <p class="text-gray-600">Masukkan nomor invoice pada kolom pencarian di atas</p>
            </div>
        </div>
    </div>

    <!-- TAB 4: UPDATE STATUS -->
    <div id="update-status" class="tab-pane" style="display:none;">
        <div class="bg-white rounded-2xl p-8 border border-gray-100">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Update Status Order</h2>
                <p class="text-gray-600">Perbarui status proses laundry dengan cepat</p>
            </div>

            <!-- Quick Status Update -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Invoice</label>
                    <input type="text" placeholder="Masukkan nomor invoice" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status Baru</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-100 focus:border-purple-500">
                        <option>-- Pilih Status --</option>
                        <option>Masuk</option>
                        <option>Dicuci</option>
                        <option>Dijemur</option>
                        <option>Disetrika</option>
                        <option>Selesai</option>
                        <option>Diambil</option>
                    </select>
                </div>
            </div>

            <button class="w-full px-6 py-4 gradient-primary text-white rounded-xl font-bold text-lg hover:shadow-xl transition flex items-center justify-center space-x-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Update Status</span>
            </button>

            <!-- Batch Update Section -->
            <div class="mt-10 pt-10 border-t border-gray-200">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Order dalam Proses</h3>
                <p class="text-gray-600 mb-6">Klik card untuk memperbarui status</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Order Card 1 -->
                    <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-5 border-2 border-yellow-200 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-bold text-gray-900">#LDY-1027</span>
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-bold">Dicuci</span>
                        </div>
                        <p class="text-sm font-semibold text-gray-900 mb-1">Rina Kusuma</p>
                        <p class="text-xs text-gray-600 mb-3">Cuci Kering Express - 7 kg</p>
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-gray-600">Est: 30 Nov, 14:00</span>
                            <span class="font-bold text-gray-900">Rp 105.000</span>
                        </div>
                    </div>

                    <!-- Order Card 2 -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 border-2 border-blue-200 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-bold text-gray-900">#LDY-1025</span>
                            <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold">Disetrika</span>
                        </div>
                        <p class="text-sm font-semibold text-gray-900 mb-1">Ahmad Fauzi</p>
                        <p class="text-xs text-gray-600 mb-3">Cuci Satuan - Jas - 2 pcs</p>
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-gray-600">Est: 30 Nov, 10:00</span>
                            <span class="font-bold text-gray-900">Rp 50.000</span>
                        </div>
                    </div>

                    <!-- Order Card 3 -->
                    <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-xl p-5 border-2 border-red-200 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between mb-3">
                            <span class="font-bold text-gray-900">#LDY-1023</span>
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold">Masuk</span>
                        </div>
                        <p class="text-sm font-semibold text-gray-900 mb-1">Budi Santoso</p>
                        <p class="text-xs text-gray-600 mb-3">Cuci Setrika Express - 5 kg</p>
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-gray-600">Est: 29 Nov, 08:00</span>
                            <span class="font-bold text-gray-900">Rp 75.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection