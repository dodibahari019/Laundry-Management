<div class="p-6 border-b border-gray-200 flex items-center justify-between sticky top-0 bg-white z-10">
    <div>
        <h2 class="text-2xl font-bold text-gray-900">Detail Order</h2>
        <p class="text-sm text-gray-500 mt-1">Informasi lengkap pesanan laundry</p>
    </div>
    <button onclick="closeDetailCrudModal()" class="text-gray-400 hover:text-gray-600">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

@foreach($dataOrder as $order)
<div class="p-6 space-y-6 max-h-[70vh] overflow-y-auto no-scrollbar">

    <!-- Header Order Info -->
    <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-6 rounded-2xl border border-purple-200">
        <div class="flex items-center justify-between mb-4">
            <div>
                <p class="text-sm text-gray-600 mb-1">Kode Order</p>
                <p class="text-3xl font-bold gradient-text">{{ $order->kode_order }}</p>
            </div>
            <div class="text-right">
                @php
                    $statusColor = 'bg-yellow-100 text-yellow-700';

                    if($order->status_order == 'menunggu') {
                        $statusColor = 'bg-yellow-100 text-yellow-700';
                    } elseif($order->status_order == 'diproses') {
                        $statusColor = 'bg-blue-100 text-blue-700';
                    } elseif($order->status_order == 'dicuci') {
                        $statusColor = 'bg-orange-100 text-orange-700';
                    } elseif($order->status_order == 'disetrika') {
                        $statusColor = 'bg-purple-100 text-purple-700';
                    } elseif($order->status_order == 'ready') {
                        $statusColor = 'bg-green-100 text-green-700';
                    } elseif($order->status_order == 'diambil') {
                        $statusColor = 'bg-gray-100 text-gray-700';
                    } else {
                        $statusColor = 'bg-red-100 text-red-700';
                    }
                @endphp
                <span class="{{ $statusColor }} px-4 py-2 rounded-full text-sm font-bold inline-flex items-center space-x-2">
                    <span class="uppercase">{{ $order->status_order }}</span>
                </span>
            </div>
        </div>

        <!-- Timeline Tanggal -->
        <div class="grid grid-cols-2 gap-4 mt-4">
            <div class="bg-white p-4 rounded-xl">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Tanggal Masuk</p>
                        <p class="font-bold text-gray-900">{{ \Carbon\Carbon::parse($order->tanggal_masuk)->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500">Estimasi Selesai</p>
                        <p class="font-bold text-gray-900">{{ \Carbon\Carbon::parse($order->tanggal_selesai)->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Pelanggan -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900">Informasi Pelanggan</h3>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div>
                <p class="text-sm text-gray-500 mb-1">Nama Pelanggan</p>
                <p class="font-semibold text-gray-900">{{ $order->nama }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500 mb-1">No. Telepon</p>
                <p class="font-semibold text-gray-900">{{ $order->no_hp }}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500 mb-1">Email</p>
                <p class="font-semibold text-gray-900">{{ $order->email }}</p>
            </div>
            <div class="col-span-2">
                <p class="text-sm text-gray-500 mb-1">Alamat</p>
                <p class="font-semibold text-gray-900">{{ $order->alamat }}</p>
            </div>
        </div>
    </div>

    <!-- Detail Layanan -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900">Detail Layanan</h3>
        </div>

        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                <div class="flex-1">
                    <p class="text-sm text-gray-500 mb-1">Nama Layanan</p>
                    <p class="font-bold text-gray-900 text-lg">{{ $order->nama_layanan }}</p>
                </div>
                <span class="{{ $order->jenis == 'kiloan' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }} px-4 py-2 rounded-full text-xs font-bold uppercase">
                    {{ $order->jenis }}
                </span>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-blue-50 rounded-xl border border-purple-100">
                    <p class="text-xs text-gray-600 mb-2">{{ $order->jenis == 'kiloan' ? 'Berat' : 'Jumlah' }}</p>
                    <p class="text-2xl font-bold gradient-text">
                        {{ $order->jenis == 'kiloan' ? rtrim(rtrim(number_format($order->berat, 2, ',', '.'), '0'), ',') : $order->qty }}
                    </p>
                    <p class="text-xs text-gray-500 mt-1">{{ $order->jenis == 'kiloan' ? 'Kg' : 'Pcs' }}</p>
                </div>

                <div class="text-center p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl border border-green-100">
                    <p class="text-xs text-gray-600 mb-2">Harga LAYANA</p>
                    <p class="text-lg font-bold text-green-600">
                        Rp {{ number_format($order->harga, 0, ',', '.') }}
                    </p>
                    <p class="text-xs text-gray-500 mt-1">per {{ $order->jenis == 'kiloan' ? 'Kg' : 'Pcs' }}</p>
                </div>

                <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-yellow-50 rounded-xl border border-orange-100">
                    <p class="text-xs text-gray-600 mb-2">Total Harga</p>
                    <p class="text-lg font-bold text-orange-600">
                        Rp {{ number_format($order->total, 0, ',', '.') }}
                    </p>
                    <p class="text-xs text-gray-500 mt-1">Subtotal</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Pembayaran -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900">Informasi Pembayaran</h3>
        </div>

        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Metode Pembayaran</span>
                <span class="font-bold text-gray-900 uppercase">{{ $order->metode }}</span>
            </div>

            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <span class="text-gray-600">Total Harga</span>
                <span class="font-bold text-gray-900">Rp {{ number_format($order->total, 0, ',', '.') }}</span>
            </div>

            <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg border border-green-200">
                <span class="text-green-700 font-medium">Total Bayar</span>
                <span class="font-bold text-green-700">Rp {{ number_format($order->jumlah, 0, ',', '.') }}</span>
            </div>

            <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg border border-blue-200">
                <span class="text-blue-700 font-medium">Kembalian</span>
                <span class="font-bold text-blue-700">Rp {{ number_format($order->kembalian, 0, ',', '.') }}</span>
            </div>
        </div>
    </div>

    <!-- Catatan -->
    @if($order->catatan)
    <div class="bg-yellow-50 border border-yellow-200 rounded-2xl p-6">
        <div class="flex items-start space-x-3">
            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="text-lg font-bold text-yellow-900 mb-2">Catatan Khusus</h3>
                <p class="text-gray-700">{{ $order->catatan }}</p>
            </div>
        </div>
    </div>
    @endif

    <!-- Timeline Status (opsional, bisa dikembangkan dengan data dari order_status_log) -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-lg font-bold text-gray-900">Riwayat Status</h3>
        </div>

        <div class="space-y-4">
            <!-- Status timeline items (bisa dikembangkan dari order_status_log) -->
            <div class="flex items-start space-x-4">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="w-0.5 h-12 bg-gray-300"></div>
                </div>
                <div class="flex-1 pb-4">
                    <p class="font-semibold text-gray-900">Order Diterima</p>
                    <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($order->tanggal_masuk)->format('d M Y, H:i') }}</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 {{ in_array($order->status_order, ['diproses', 'dicuci', 'disetrika', 'ready', 'diambil']) ? 'bg-green-100' : 'bg-gray-100' }} rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 {{ in_array($order->status_order, ['diproses', 'dicuci', 'disetrika', 'ready', 'diambil']) ? 'text-green-600' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    @if($order->status_order != 'menunggu')
                    <div class="w-0.5 h-12 bg-gray-300"></div>
                    @endif
                </div>
                <div class="flex-1 pb-4">
                    <p class="font-semibold text-gray-900">Dalam Proses</p>
                    <p class="text-sm text-gray-500">{{ in_array($order->status_order, ['diproses', 'dicuci', 'disetrika', 'ready', 'diambil']) ? 'Sedang diproses' : 'Menunggu' }}</p>
                </div>
            </div>

            @if($order->status_order == 'diambil')
            <div class="flex items-start space-x-4">
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <p class="font-semibold text-gray-900">Selesai & Diambil</p>
                    <p class="text-sm text-gray-500">Order telah selesai</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="p-6 border-t border-gray-200 flex items-center justify-between bg-white">
        <button type="button" onclick="closeDetailCrudModal()" class="px-6 py-3 border border-gray-300 rounded-xl text-gray-700 font-semibold hover:bg-gray-50 transition">
            Tutup
        </button>
        <div class="flex space-x-3">
            <button type="button" onclick="printOrder('{{ $order->kode_order }}')" class="px-6 py-3 gradient-primary text-white rounded-xl font-semibold hover:shadow-lg transition flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                <span>Print</span>
            </button>
            <button type="button" class="px-6 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl font-semibold hover:shadow-lg transition flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <span>Cancel Order</span>
            </button>
        </div>
    </div>
</div>

@endforeach
