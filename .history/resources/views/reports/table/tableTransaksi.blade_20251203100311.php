<div class="overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">No</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Kode Order</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Nama</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">No Hp</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Nama Layanan</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Jenis</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Berat</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Qty</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Total</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Status</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Tanggal Masuk</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Estimasi Selesai</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Metode Pembayaran</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Tanggal Bayar</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Dibayar</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Kembalian</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Petugas</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50 transition">
                <td class="py-4 px-6"><span class="font-semibold text-gray-900">1</span></td>
                <td class="py-4 px-6">
                    <span class="font-semibold text-purple-600">#TRX-001247</span>
                </td>
                <td class="py-4 px-6">
                    <div>
                        <p class="text-sm font-medium text-gray-900">29 Nov 2025</p>
                        <p class="text-xs text-gray-500">14:30 WIB</p>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div>
                        <p class="font-semibold text-gray-900">Budi Santoso</p>
                        <p class="text-xs text-gray-500">0812-3456-7890</p>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <span class="text-sm text-gray-900">Cuci + Setrika (3 kg)</span>
                </td>
                <td class="py-4 px-6 text-right">
                    <p class="font-bold text-gray-900">Rp 24.000</p>
                </td>
                <td class="py-4 px-6">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Selesai</span>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center justify-center space-x-2">
                        <button class="text-blue-600 hover:text-blue-800 p-1" title="Detail">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Summary Footer -->
<div class="p-6 bg-gray-50 border-t border-gray-200">
    <div class="flex items-center justify-between">
        <div class="text-sm text-gray-600">
            {{-- Menampilkan <span class="font-semibold">1-10</span> dari <span class="font-semibold">1,247</span> transaksi --}}
        </div>
        <div class="flex items-center space-x-6">
            <div class="text-right">
                <p class="text-sm text-gray-600 mb-1">Total Transaksi</p>
                <p class="text-2xl font-bold text-gray-900">Rp 331.000</p>
            </div>
            <div class="h-12 w-px bg-gray-300"></div>
            <div class="text-right">
                <p class="text-sm text-gray-600 mb-1">Rata-rata</p>
                <p class="text-2xl font-bold text-purple-600">Rp 33.100</p>
            </div>
        </div>
    </div>
</div>