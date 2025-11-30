<table class="w-full">
    <thead class="bg-gray-50">
        <tr>
            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">No</th>
            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Nama Layanan</th>
            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Jenis</th>
            <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Harga</th>
            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Durasi</th>
            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Status</th>
            <th class="text-center py-4 px-6 text-xs font-semibold text-gray-600 uppercase">Aksi</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
        <!-- Row 1 -->
        <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">
                <span class="font-semibold text-gray-900">1</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Cuci Kering</p>
                        {{-- <p class="text-xs text-gray-500">Regular laundry</p> --}}
                    </div>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Kiloan</span>
            </td>
            <td class="py-4 px-6 text-right">
                <p class="font-bold text-gray-900">Rp 5.000</p>
                {{-- <p class="text-xs text-gray-500">per kg</p> --}}
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-900">2-3 Hari</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center justify-center space-x-2">
                    <button onclick="openDetailModal()" class="text-blue-600 hover:text-blue-800 p-1" title="Detail">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                    <button onclick="openEditModal()" class="text-green-600 hover:text-green-800 p-1" title="Edit">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="confirmDelete()" class="text-red-600 hover:text-red-800 p-1" title="Hapus">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </td>
        </tr>

        <!-- Row 2 -->
        <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">
                <span class="font-semibold text-gray-900">2</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Cuci + Setrika</p>
                        {{-- <p class="text-xs text-gray-500">Wash & iron service</p> --}}
                    </div>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Kiloan</span>
            </td>
            <td class="py-4 px-6 text-right">
                <p class="font-bold text-gray-900">Rp 8.000</p>
                {{-- <p class="text-xs text-gray-500">per kg</p> --}}
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-900">3-4 Hari</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center justify-center space-x-2">
                    <button onclick="openDetailModal()" class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                    <button onclick="openEditModal()" class="text-green-600 hover:text-green-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="confirmDelete()" class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </td>
        </tr>

        <!-- Row 3 -->
        <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">
                <span class="font-semibold text-gray-900">3</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Express 6 Jam</p>
                        {{-- <p class="text-xs text-gray-500">Fast service</p> --}}
                    </div>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Kiloan</span>
            </td>
            <td class="py-4 px-6 text-right">
                <p class="font-bold text-gray-900">Rp 15.000</p>
                {{-- <p class="text-xs text-gray-500">per kg</p> --}}
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-sm text-gray-900 font-semibold">6 Jam</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center justify-center space-x-2">
                    <button onclick="openDetailModal()" class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                    <button onclick="openEditModal()" class="text-green-600 hover:text-green-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="confirmDelete()" class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </td>
        </tr>

        <!-- Row 4 -->
        <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">
                <span class="font-semibold text-gray-900">4</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Setrika Saja</p>
                        {{-- <p class="text-xs text-gray-500">Iron only</p> --}}
                    </div>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Kiloan</span>
            </td>
            <td class="py-4 px-6 text-right">
                <p class="font-bold text-gray-900">Rp 4.000</p>
                {{-- <p class="text-xs text-gray-500">per kg</p> --}}
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-900">1 Hari</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center justify-center space-x-2">
                    <button onclick="openDetailModal()" class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                    <button onclick="openEditModal()" class="text-green-600 hover:text-green-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="confirmDelete()" class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </td>
        </tr>

        <!-- Row 5 -->
        <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">
                <span class="font-semibold text-gray-900">5</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Cuci Jas</p>
                        {{-- <p class="text-xs text-gray-500">Suit cleaning</p> --}}
                    </div>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Satuan</span>
            </td>
            <td class="py-4 px-6 text-right">
                <p class="font-bold text-gray-900">Rp 25.000</p>
                {{-- <p class="text-xs text-gray-500">per item</p> --}}
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-900">3-4 Hari</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Aktif</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center justify-center space-x-2">
                    <button onclick="openDetailModal()" class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                    <button onclick="openEditModal()" class="text-green-600 hover:text-green-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="confirmDelete()" class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </td>
        </tr>

        <!-- Row 6 -->
        <tr class="hover:bg-gray-50 transition">
            <td class="py-4 px-6">
                <span class="font-semibold text-gray-900">6</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">Cuci Karpet</p>
                        {{-- <p class="text-xs text-gray-500">Carpet cleaning</p> --}}
                    </div>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Satuan</span>
            </td>
            <td class="py-4 px-6 text-right">
                <p class="font-bold text-gray-900">Rp 50.000</p>
                <p class="text-xs text-gray-500">per m²</p>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm text-gray-900">5-7 Hari</span>
                </div>
            </td>
            <td class="py-4 px-6">
                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Nonaktif</span>
            </td>
            <td class="py-4 px-6">
                <div class="flex items-center justify-center space-x-2">
                    <button onclick="openDetailModal()" class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                    <button onclick="openEditModal()" class="text-green-600 hover:text-green-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button onclick="confirmDelete()" class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
    </tbody>
</table>
