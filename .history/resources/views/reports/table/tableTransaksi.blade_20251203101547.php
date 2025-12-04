<div class="overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">No</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Kode Order</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Pelanggan</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Layanan</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Berat/Qty</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Total</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Status</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Estimasi Selesai</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Metode Pembayaran</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Tanggal Bayar</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Dibayar</th>
                <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Kembalian</th>
                <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Petugas</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($dataOrder as $x)
            @endfore
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