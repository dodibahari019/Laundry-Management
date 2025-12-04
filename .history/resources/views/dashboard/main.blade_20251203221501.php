@extends('layouts.frame')
@section('Title', 'Orders')
@section('CssSection')

@endsection
@section('HeaderTitle', 'Manajemen Order')
@section('Description', 'Kelola pesanan laundry dari pelanggan')
@section('MainContentArea')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-8">
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <span class="text-green-600 text-sm font-semibold flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                +12%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Total Order Hari Ini</h3>
                        <p class="text-3xl font-bold text-gray-900">28</p>
                        <p class="text-xs text-gray-400 mt-2">Dari kemarin: 25 order</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">PROSES</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Dalam Proses</h3>
                        <p class="text-3xl font-bold text-gray-900">12</p>
                        <p class="text-xs text-gray-400 mt-2">8 cuci • 4 setrika</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">SELESAI</span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Selesai Hari Ini</h3>
                        <p class="text-3xl font-bold text-gray-900">16</p>
                        <p class="text-xs text-gray-400 mt-2">14 sudah diambil</p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-2xl p-6 hover-scale border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-purple-600 text-sm font-semibold flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                +8%
                            </span>
                        </div>
                        <h3 class="text-gray-500 text-sm font-medium mb-1">Pendapatan Hari Ini</h3>
                        <p class="text-3xl font-bold text-gray-900">Rp 3.2jt</p>
                        <p class="text-xs text-gray-400 mt-2">Target: Rp 4jt</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <!-- Left Section (2 cols) -->
                    <div class="lg:col-span-2 space-y-8">
                        
                        <!-- Order Queue -->
                        <div class="bg-white rounded-2xl p-6 border border-gray-100">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-xl font-bold text-gray-900">Antrian Order</h2>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">5 MENUNGGU</span>
                            </div>

                            <div class="space-y-3">
                                <!-- Queue Item 1 -->
                                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-red-50 to-orange-50 rounded-xl border-l-4 border-red-500">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                                            <span class="text-red-600 font-bold">#1023</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Budi Santoso</p>
                                            <p class="text-sm text-gray-500">Cuci + Setrika Express • 5kg</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">MENUNGGU CUCI</span>
                                        <button class="gradient-primary text-white px-4 py-2 rounded-lg text-sm font-semibold hover:opacity-90">
                                            Proses
                                        </button>
                                    </div>
                                </div>

                                <!-- Queue Item 2 -->
                                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl border-l-4 border-yellow-500">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                                            <span class="text-yellow-600 font-bold">#1024</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Siti Aminah</p>
                                            <p class="text-sm text-gray-500">Cuci Kering • 3kg</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">SEDANG DICUCI</span>
                                        <button class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-200">
                                            Update
                                        </button>
                                    </div>
                                </div>
                                <!-- Queue Item 3 -->
                                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                            <span class="text-blue-600 font-bold">#1025</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Ahmad Fauzi</p>
                                            <p class="text-sm text-gray-500">Cuci Satuan - Jas • 2pcs</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">SEDANG SETRIKA</span>
                                        <button class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-200">
                                            Update
                                        </button>
                                    </div>
                                </div>

                                <!-- Queue Item 4 -->
                                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                            <span class="text-green-600 font-bold">#1026</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Dewi Lestari</p>
                                            <p class="text-sm text-gray-500">Cuci + Setrika • 4kg</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">SIAP DIAMBIL</span>
                                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-700">
                                            Selesai
                                        </button>
                                    </div>
                                </div>

                                <!-- Queue Item 5 -->
                                <div class="flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border-l-4 border-purple-500">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                            <span class="text-purple-600 font-bold">#1027</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Rina Kusuma</p>
                                            <p class="text-sm text-gray-500">Cuci Kering Express • 7kg</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">MENUNGGU CUCI</span>
                                        <button class="gradient-primary text-white px-4 py-2 rounded-lg text-sm font-semibold hover:opacity-90">
                                            Proses
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <button class="w-full mt-4 text-purple-600 font-semibold py-2 hover:bg-purple-50 rounded-lg transition">
                                Lihat Semua Order →
                            </button>
                        </div>

                        <!-- Recent Orders Table -->
                        <div class="bg-white rounded-2xl p-6 border border-gray-100">
                            <div class="flex items-center justify-between mb-6">
                                <h2 class="text-xl font-bold text-gray-900">Riwayat Order Terbaru</h2>
                                <div class="flex space-x-2">
                                    <button class="px-4 py-2 bg-purple-100 text-purple-600 rounded-lg text-sm font-semibold">Semua</button>
                                    <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg text-sm font-semibold hover:bg-gray-200">Selesai</button>
                                    <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg text-sm font-semibold hover:bg-gray-200">Proses</button>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b border-gray-200">
                                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Nomor Nota</th>
                                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Customer</th>
                                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Layanan</th>
                                            <th class="text-left py-3 px-4 text-sm font-semibold text-gray-600">Status</th>
                                            <th class="text-right py-3 px-4 text-sm font-semibold text-gray-600">Total</th>
                                            <th class="text-center py-3 px-4 text-sm font-semibold text-gray-600">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                                            <td class="py-4 px-4">
                                                <span class="font-semibold text-gray-900">#LDY-1027</span>
                                                <p class="text-xs text-gray-500">29 Nov 2024</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="font-medium text-gray-900">Rina Kusuma</p>
                                                <p class="text-xs text-gray-500">0812-3456-7890</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="text-sm text-gray-900">Cuci Kering Express</p>
                                                <p class="text-xs text-gray-500">7kg</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Proses</span>
                                            </td>
                                            <td class="py-4 px-4 text-right">
                                                <p class="font-bold text-gray-900">Rp 105.000</p>
                                                <p class="text-xs text-green-600">Lunas</p>
                                            </td>
                                            <td class="py-4 px-4 text-center">
                                                <button class="text-purple-600 hover:text-purple-800">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                                            <td class="py-4 px-4">
                                                <span class="font-semibold text-gray-900">#LDY-1026</span>
                                                <p class="text-xs text-gray-500">29 Nov 2024</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="font-medium text-gray-900">Dewi Lestari</p>
                                                <p class="text-xs text-gray-500">0813-2345-6789</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="text-sm text-gray-900">Cuci + Setrika</p>
                                                <p class="text-xs text-gray-500">4kg</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">Siap Diambil</span>
                                            </td>
                                            <td class="py-4 px-4 text-right">
                                                <p class="font-bold text-gray-900">Rp 32.000</p>
                                                <p class="text-xs text-green-600">Lunas</p>
                                            </td>
                                            <td class="py-4 px-4 text-center">
                                                <button class="text-purple-600 hover:text-purple-800">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                                            <td class="py-4 px-4">
                                                <span class="font-semibold text-gray-900">#LDY-1025</span>
                                                <p class="text-xs text-gray-500">29 Nov 2024</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="font-medium text-gray-900">Ahmad Fauzi</p>
                                                <p class="text-xs text-gray-500">0811-9876-5432</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="text-sm text-gray-900">Cuci Satuan - Jas</p>
                                                <p class="text-xs text-gray-500">2pcs</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold">Setrika</span>
                                            </td>
                                            <td class="py-4 px-4 text-right">
                                                <p class="font-bold text-gray-900">Rp 50.000</p>
                                                <p class="text-xs text-red-600">Belum Bayar</p>
                                            </td>
                                            <td class="py-4 px-4 text-center">
                                                <button class="text-purple-600 hover:text-purple-800">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                                            <td class="py-4 px-4">
                                                <span class="font-semibold text-gray-900">#LDY-1024</span>
                                                <p class="text-xs text-gray-500">28 Nov 2024</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="font-medium text-gray-900">Siti Aminah</p>
                                                <p class="text-xs text-gray-500">0814-5678-9012</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="text-sm text-gray-900">Cuci Kering</p>
                                                <p class="text-xs text-gray-500">3kg</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">Cuci</span>
                                            </td>
                                            <td class="py-4 px-4 text-right">
                                                <p class="font-bold text-gray-900">Rp 30.000</p>
                                                <p class="text-xs text-green-600">Lunas</p>
                                            </td>
                                            <td class="py-4 px-4 text-center">
                                                <button class="text-purple-600 hover:text-purple-800">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-4 px-4">
                                                <span class="font-semibold text-gray-900">#LDY-1023</span>
                                                <p class="text-xs text-gray-500">28 Nov 2024</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="font-medium text-gray-900">Budi Santoso</p>
                                                <p class="text-xs text-gray-500">0815-1234-5678</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <p class="text-sm text-gray-900">Cuci + Setrika Express</p>
                                                <p class="text-xs text-gray-500">5kg</p>
                                            </td>
                                            <td class="py-4 px-4">
                                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">Menunggu</span>
                                            </td>
                                            <td class="py-4 px-4 text-right">
                                                <p class="font-bold text-gray-900">Rp 75.000</p>
                                                <p class="text-xs text-green-600">Lunas</p>
                                            </td>
                                            <td class="py-4 px-4 text-center">
                                                <button class="text-purple-600 hover:text-purple-800">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- Right Section (1 col) -->
                    <div class="space-y-6">
                        
                        <!-- Revenue Chart -->
                        <div class="bg-white rounded-2xl p-6 border border-gray-100">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Pendapatan Mingguan</h3>
                            <canvas id="revenueChart" height="200"></canvas>
                        </div>

                        <!-- Important Notifications -->
                        <div class="bg-white rounded-2xl p-6 border border-gray-100">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-900">Notifikasi Penting</h3>
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs font-bold">3</span>
                            </div>

                            <div class="space-y-3">
                                <!-- Notification 1 -->
                                <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-red-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-900">Order Terlambat</p>
                                            <p class="text-xs text-gray-600 mt-1">2 order melewati estimasi waktu selesai</p>
                                            <button class="text-xs text-red-600 font-semibold mt-2 hover:underline">Lihat Detail →</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notification 2 -->
                                <div class="p-4 bg-yellow-50 border-l-4 border-yellow-500 rounded-lg">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-yellow-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-900">Belum Diambil</p>
                                            <p class="text-xs text-gray-600 mt-1">4 order sudah selesai >3 hari belum diambil</p>
                                            <button class="text-xs text-yellow-600 font-semibold mt-2 hover:underline">Hubungi Customer →</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notification 3 -->
                                <div class="p-4 bg-blue-50 border-l-4 border-blue-500 rounded-lg">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                        </svg>
                                        <div class="flex-1">
                                            <p class="text-sm font-semibold text-gray-900">Customer Baru</p>
                                            <p class="text-xs text-gray-600 mt-1">5 customer baru mendaftar hari ini</p>
                                            <button class="text-xs text-blue-600 font-semibold mt-2 hover:underline">Lihat Data →</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-2xl p-6 text-white">
                            <h3 class="text-lg font-bold mb-4">Statistik Bulan Ini</h3>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                            </svg>
                                        </div>
                                        <span class="font-medium">Total Order</span>
                                    </div>
                                    <span class="text-2xl font-bold">842</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="font-medium">Pendapatan</span>
                                    </div>
                                    <span class="text-2xl font-bold">89jt</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="font-medium">Customer</span>
                                    </div>
                                    <span class="text-2xl font-bold">348</span>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Customer Activity -->
                        <div class="bg-white rounded-2xl p-6 border border-gray-100">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Aktivitas Customer Terbaru</h3>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-900">Rina Kusuma</p>
                                        <p class="text-xs text-gray-500">Menambah order baru</p>
                                    </div>
                                    <span class="text-xs text-gray-400">5 menit lalu</span>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-900">Ahmad Fauzi</p>
                                        <p class="text-xs text-gray-500">Melakukan pembayaran</p>
                                    </div>
                                    <span class="text-xs text-gray-400">15 menit lalu</span>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-900">Dewi Lestari</p>
                                        <p class="text-xs text-gray-500">Mengambil cucian</p>
                                    </div>
                                    <span class="text-xs text-gray-400">1 jam lalu</span>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-gray-900">Budi Santoso</p>
                                        <p class="text-xs text-gray-500">Registrasi customer baru</p>
                                    </div>
                                    <span class="text-xs text-gray-400">2 jam lalu</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </main>
@endsection
@section('JavascriptSection')
<script>
    // Fungsi Format Tanggal → "30 Nov 2025"
    function formatTanggal(tanggal) {
        if (!tanggal) return '-';

        const bulan = [
            "Jan", "Feb", "Mar", "Apr", "Mei", "Jun",
            "Jul", "Agu", "Sep", "Okt", "Nov", "Des"
        ];

        let dateObj = new Date(tanggal);

        if (isNaN(dateObj)) return tanggal;

        let hari = dateObj.getDate();
        let bulanText = bulan[dateObj.getMonth()];
        let tahun = dateObj.getFullYear();

        return `${hari} ${bulanText} ${tahun}`;
    }

    function formatTanggalWaktu(tanggal) {
        if (!tanggal) return '-';

        const bulan = [
            "Jan", "Feb", "Mar", "Apr", "Mei", "Jun",
            "Jul", "Agu", "Sep", "Okt", "Nov", "Des"
        ];

        let dateObj = new Date(tanggal);
        if (isNaN(dateObj)) return tanggal; // kalau gagal parse

        let hari = dateObj.getDate();
        let bulanText = bulan[dateObj.getMonth()];
        let tahun = dateObj.getFullYear();

        // ambil jam-menit
        let jam = dateObj.getHours().toString().padStart(2, '0');
        let menit = dateObj.getMinutes().toString().padStart(2, '0');
        let detik = dateObj.getSeconds().toString().padStart(2, '0');

        // cek apakah input punya waktu (timestamp > 00:00:00)
        let adaWaktu = tanggal.toString().includes(':') ||
                        dateObj.getHours() !== 0 ||
                        dateObj.getMinutes() !== 0 ||
                        dateObj.getSeconds() !== 0;

        return `${hari} ${bulanText} ${tahun} ${jam}:${menit}`;
    }

    function formatBerat(value) {
        // Ubah ke float
        let num = parseFloat(value);

        // Format max 2 decimal
        let str = num.toFixed(2); // contoh: 3.00, 3.50, 4.00

        // Hilangkan 0 di belakang
        str = str.replace(/\.?0+$/, '');
        // - Kalau .00 → hilang jadi '' → angka bulat
        // - Kalau .50 → jadi .5

        // Ganti titik menjadi koma
        str = str.replace('.', ',');

        return str;
    }

    function updateTableOrders(res) {
        let html = '';

        if (res.data && res.data.length > 0) {
            res.data.forEach((x, index) => {
                // Nomor urut
                let nomor = (res.current_page - 1) * res.per_page + index + 1;

                let jenisColor = x.jenis == 'kiloan'? 'bg-blue-100 text-blue-700': 'bg-purple-100 text-purple-700';
                let beratQtyRaw = x.jenis == 'kiloan'? x.berat : x.jumlah;
                let satuan = x.jenis == 'kiloan'? 'Kg' : 'Pcs';

                let beratQty = formatBerat(beratQtyRaw);

                let statusLaundry = x.status_order;
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
                } else if(statusLaundry == 'diambil'){
                    statusColor = 'bg-gray-100 text-gray-700';
                } else {
                    statusColor = 'bg-red-100 text-red-700';
                }

                let icon = x.status_order == 'diambil'?
                    `<svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>`
                :
                    `<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>`;

                let estimasi = x.status_order == 'diambil'? 'Selesai' : formatTanggal(x.tanggal_selesai);

                html += `
                 <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <span class="font-semibold text-gray-900">${nomor}</span>
                    </td>
                    <td class="py-4 px-6">
                        <div>
                            <p class="font-semibold text-purple-600">#${x.kode_order}</p>
                            <p class="text-xs text-gray-500">${formatTanggalWaktu(x.tanggal_masuk)}</p>
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
                        <span class="${jenisColor} px-3 py-1 rounded-full text-xs font-bold">${beratQty} ${satuan}</span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <p class="font-bold text-gray-900">Rp ${(Number(x.total)).toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}</p>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex justify-center">
                            <span class="${statusColor} px-3 py-1 rounded-full text-xs font-bold">${x.status_order}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center space-x-2">
                            ${icon}
                            <span class="text-sm text-gray-900">${estimasi}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center justify-center space-x-2">
                            <button data-url-detail="/orders/${x.id_order}/detail" class="detail-modal-crud text-blue-600 hover:text-blue-800 p-1" title="Detail">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button data-url="/orders/${x.id_order}/edit" class="modal-crud text-green-600 hover:text-green-800 p-1" title="Edit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                `;
            });
        } else {
            html = `<tr><td colspan="9" class="text-center py-4 text-gray-500">Data tidak ditemukan</td></tr>`;
        }

        $('#idBodyTableOrders').html(html);
    }

    function updateInfoOrders(res) {
        // Update jumlah layanan
        $('#jumlahLayananInfoOrders').html(
            `Menampilkan ${res.total} order aktif`
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

        $('#paginationOrdersContainer').html(paginationHtml);
    }

    // Event delegation untuk pagination
    $(document).on('click', '#paginationOrdersContainer button[data-page]', function() {
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
                data: { order: order, status: status, tanggal: tanggal, page: page
                 },
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
    // $('#searchOrder, #filterStatus, #filterTanggal').on('keyup change', () => fetchDataorders());
    $('#searchOrder').on('keyup', () => fetchDataorders());
    $('#filterStatus, #filterTanggal').on('change', () => fetchDataorders());
</script>
<script>
    function ButtonCreatePelangganBaru(event) {
        if (event) event.preventDefault(); // cegah submit form

        let modal = document.getElementById("crudSubModal");
        modal.classList.remove("hidden");

        fetch("/orders/create-pelanggan")
            .then(res => res.text())
            .then(html => {
                document.getElementById("subModalContent").innerHTML = html;
            });
    }

    function JustRunThisButtonOrders(){
        let nama = document.getElementById('id_nama').value;
        let no_hp = document.getElementById('id_no_hp').value;
        let email = document.getElementById('id_email').value;
        let alamat = document.getElementById('id_alamat').value;

        if(nama == '' || nama == null){
            Swal.fire({
                icon: "warning",
                confirmButtonColor: "#6D28D9",
                title: "Peringatan",
                text: "Harap Isi Nama Pelanggan!",
                timer:2000,
                timerProgressBar: true,
            });
        } else if(no_hp == '' || no_hp == null){
            Swal.fire({
                icon: "warning",
                confirmButtonColor: "#6D28D9",
                title: "Peringatan",
                text: "Harap Isi No Hp Pelanggan!",
                timer:2000,
                timerProgressBar: true,
            });
        } else if(email == '' || email == null){
            Swal.fire({
                icon: "warning",
                confirmButtonColor: "#6D28D9",
                title: "Peringatan",
                text: "Harap Isi Email Pelanggan!",
                timer:2000,
                timerProgressBar: true,
            });
        } else if (alamat == '' || alamat == null){
            Swal.fire({
                icon: "warning",
                confirmButtonColor: "#6D28D9",
                title: "Peringatan",
                text: "Harap Isi Alamat Pelanggan!",
                timer:2000,
                timerProgressBar: true,
            });
        } else {
            MakeNewPelangganButton();
        }
    }

    function MakeNewPelangganButton() {
        let formData = {
            nama: $("#id_nama").val(),
            no_hp: $("#id_no_hp").val(),
            email: $("#id_email").val(),
            alamat: $("#id_alamat").val(),
            _token: $("input[name=_token]").val()
        };

        $.ajax({
            url: "/orders/pelanggan",
            type: "POST",
            data: formData,
            success: function(res) {
                if (res.success) {

                    closeCrudSubModal();

                    let newOption =
                        `<option value="${res.data.id_pelanggan}">
                            ${res.data.nama} - ${res.data.no_hp}
                        </option>`;

                    $("#selectPelanggan").append(newOption);

                    $("#selectPelanggan").val(res.data.id_pelanggan);

                    $("#idCreateSubForm")[0].reset();

                    Swal.fire({
                        confirmButtonColor: "#6D28D9",
                        title: "Success!",
                        text: "Pelanggan berhasil ditambahkan!",
                        icon: "success",
                        timer:1000
                    });

                } else {
                    Swal.fire("Error", res.message, "error");
                }
            },
            error: function(xhr) {
                Swal.fire("Error", "Terjadi kesalahan server", "error");
            }
        });
    }
</script>
<script>
function ValidateCreateOrder() {
    let pelanggan = document.getElementById('selectPelanggan').value;
    let layanan = document.getElementById('selectLayanan').value;
    let berat = document.getElementById('id_berat').value;
    let qty = document.getElementById('id_qty').value;

    let total = document.getElementById('id_total').value || "0";

    let totalBayarRaw = document.getElementById('id_totalBayar').value;
    let totalBayarClean = totalBayarRaw.replace(/[^0-9]/g, '');
    let totalBayar = parseInt(totalBayarClean) || 0;

    let totalInt = parseInt(total) || 0;

    if (pelanggan === "") {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap pilih pelanggan!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (layanan === "") {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap pilih layanan!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if ((berat == "" || berat == 0) && (qty == "" || qty == 0)) {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap isi berat atau qty!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (totalInt <= 0) {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Total harga belum dihitung!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (totalBayarRaw === "") {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap isi total bayar!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (totalBayar < totalInt) {
        return Swal.fire({
            icon: "error",
            confirmButtonColor: "#6D28D9",
            title: "Pembayaran Kurang!",
            text: "Total bayar masih kurang dari total harga!",
            timer: 2500,
            timerProgressBar: true
        });
    } else {
        document.getElementById('idCreateFormOrders').submit();
    }
}
</script>
<script>
    function ChooseSatuan(selectElement){
        // ambil option yang dipilih
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        const jenisLayanan = selectedOption.getAttribute('data-layanan');
        const jenisSatuan = selectedOption.getAttribute('data-jenis'); // 'kiloan' atau 'pcs'
        const durasi = parseFloat(selectedOption.getAttribute('data-durasi')); // dalam jam

        if(jenisSatuan == 'kiloan'){
            document.getElementById('id_berat').removeAttribute('readonly');
            document.getElementById('id_berat').value = 0;
            document.getElementById('id_qty').setAttribute('readonly', true);
            document.getElementById('id_qty').value = 0;
        }else{
            document.getElementById('id_berat').setAttribute('readonly', true);
            document.getElementById('id_berat').value = 0;
            document.getElementById('id_qty').removeAttribute('readonly');
            document.getElementById('id_qty').value = 0;
        }

        // Hitung tanggal selesai
        const tanggalMasukInput = document.getElementById('tanggalMasuk');
        const tanggalSelesaiInput = document.getElementById('tanggalSelesai');

        const tanggalMasuk = new Date(tanggalMasukInput.value); // ambil tanggal masuk
        let tanggalSelesai = new Date(tanggalMasuk); // clone tanggal masuk

        if(durasi >= 24){
            // durasi lebih dari 1 hari, hitung jumlah hari, genapi ke atas
            const hari = Math.ceil(durasi / 24);
            tanggalSelesai.setDate(tanggalSelesai.getDate() + hari);
        }
        // durasi < 24 jam, tanggal selesai tetap sama

        // format YYYY-MM-DD
        const yyyy = tanggalSelesai.getFullYear();
        const mm = String(tanggalSelesai.getMonth() + 1).padStart(2, '0'); // bulan 0-11
        const dd = String(tanggalSelesai.getDate()).padStart(2, '0');
        tanggalSelesaiInput.value = `${yyyy}-${mm}-${dd}`;

        document.getElementById('idServicesThatYouChoose').innerText = jenisLayanan;
        document.getElementById('subtotal').innerText = "Rp0,-";
        document.getElementById('totalHarga').innerText = "Rp0,-";
    }

    function JustHitungTotal(inputValue){
        // Ambil select layanan
        const selectLayanan = document.getElementById('selectLayanan');
        const selectedOption = selectLayanan.options[selectLayanan.selectedIndex];

        if(!selectedOption || selectedOption.value === "") {
            // Jika belum pilih layanan, subtotal tetap 0
            document.getElementById('subtotal').innerText = "Rp0,-";
            document.getElementById('totalHarga').innerText = "Rp0,-";
            return;
        }

        const harga = parseFloat(selectedOption.getAttribute('data-harga')); // harga per Kg atau per Pcs
        const jenis = selectedOption.getAttribute('data-jenis'); // 'kiloan' atau 'pcs'

        // Ambil berat dan qty
        let berat = parseFloat(document.getElementById('id_berat').value) || 0;
        let qty = parseFloat(document.getElementById('id_qty').value) || 0;

        // Hitung subtotal sesuai jenis
        let subtotal = 0;
        if(jenis == 'kiloan'){
            subtotal = harga * berat;
        } else {
            subtotal = harga * qty;
        }

        // Tampilkan di Ringkasan Pembayaran
        const formatRp = new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0  }).format(subtotal);
        document.getElementById('subtotal').innerText = formatRp + '.-';
        document.getElementById('totalHarga').innerText = formatRp + '.-';
        document.getElementById('id_total').value = subtotal;
        // Tampilkan juga nama layanan yang dipilih
        let jumlah = jenis == 'kiloan'? berat : qty;
        let satuan = jenis == 'kiloan'? 'Kg' : 'Pcs';
        document.getElementById('idServicesThatYouChoose').innerText = selectedOption.getAttribute('data-layanan') + ' (' + jumlah + ' ' + satuan + ')';
    }

    function HitungKembalian(totalBayar) {
        // Ambil total dari hidden input
        let total = parseFloat(document.getElementById('id_total').value) || 0;

        // Bersihkan input (hapus titik dan karakter selain angka)
        let bayarBersih = totalBayar.replace(/[^0-9]/g, '');
        let bayar = parseFloat(bayarBersih) || 0;

        // Hitung kembalian
        let kembalian = (bayar - total) >= 0 ? (bayar - total) : 0;
        console.log(bayar, total, kembalian);

        // Jika kembalian negatif, tetap tampil angka minus
        // Format angka ke Rupiah
        const formatRp = new Intl.NumberFormat('id-ID', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(kembalian);

        // Tampilkan ke input kembalian
        document.getElementById('id_kembalian').value = formatRp;

        // Kembalikan format input total bayar sebagai Rp
        const formatBayar = new Intl.NumberFormat('id-ID', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(bayar);

        document.getElementById('id_totalBayar').value = formatBayar;
    }
</script>
<script>
    function ValidateCreateOrderEdit() {
    let pelanggan = document.getElementById('selectPelanggan_edit').value;
    let layanan = document.getElementById('selectLayanan_edit').value;
    let berat = document.getElementById('id_berat_edit').value;
    let qty = document.getElementById('id_qty_edit').value;

    let total = document.getElementById('id_total_edit').value || "0";

    let totalBayarRaw = document.getElementById('id_totalBayar_edit').value;
    let totalBayarClean = totalBayarRaw.replace(/[^0-9]/g, '');
    let totalBayar = parseInt(totalBayarClean) || 0;

    let totalInt = parseInt(total) || 0;

    if (pelanggan === "") {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap pilih pelanggan!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (layanan === "") {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap pilih layanan!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if ((berat == "" || berat == 0) && (qty == "" || qty == 0)) {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap isi berat atau qty!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (totalInt <= 0) {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Total harga belum dihitung!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (totalBayarRaw === "") {
        return Swal.fire({
            icon: "warning",
            confirmButtonColor: "#6D28D9",
            title: "Peringatan",
            text: "Harap isi total bayar!",
            timer: 2000,
            timerProgressBar: true
        });
    }else if (totalBayar < totalInt) {
        return Swal.fire({
            icon: "error",
            confirmButtonColor: "#6D28D9",
            title: "Pembayaran Kurang!",
            text: "Total bayar masih kurang dari total harga!",
            timer: 2500,
            timerProgressBar: true
        });
    } else {
        document.getElementById('idEditFormOrders').submit();
    }
}
</script>
<script>
    function ChooseSatuanEdit(selectElementEdit){
        // ambil option yang dipilih
        const selectedOptionEdit = selectElementEdit.options[selectElementEdit.selectedIndex];
        const jenisLayananEdit = selectedOptionEdit.getAttribute('data-layanan-edit');
        const jenisSatuanEdit = selectedOptionEdit.getAttribute('data-jenis-edit'); // 'kiloan' atau 'pcs'
        const durasiEdit = parseFloat(selectedOptionEdit.getAttribute('data-durasi-edit')); // dalam jam

        if(jenisSatuanEdit == 'kiloan'){
            document.getElementById('id_berat_edit').removeAttribute('readonly');
            document.getElementById('id_berat_edit').value = 0;
            document.getElementById('id_qty_edit').setAttribute('readonly', true);
            document.getElementById('id_qty_edit').value = 0;
        }else{
            document.getElementById('id_berat_edit').setAttribute('readonly', true);
            document.getElementById('id_berat_edit').value = 0;
            document.getElementById('id_qty_edit').removeAttribute('readonly');
            document.getElementById('id_qty_edit').value = 0;
        }

        // Hitung tanggal selesai
        const tanggalMasukInputEdit = document.getElementById('tanggalMasuk_edit');
        const tanggalSelesaiInputEdit = document.getElementById('tanggalSelesai_edit');

        const tanggalMasukEdit = new Date(tanggalMasukInputEdit.value); // ambil tanggal masuk
        let tanggalSelesaiEdit = new Date(tanggalMasukEdit); // clone tanggal masuk

        if(durasiEdit >= 24){
            // durasiEdit lebih dari 1 hari, hitung jumlah hari, genapi ke atas
            const hariEdit = Math.ceil(durasiEdit / 24);
            tanggalSelesaiEdit.setDate(tanggalSelesaiEdit.getDate() + hariEdit);
        }
        // durasiEdit < 24 jam, tanggal selesai tetap sama

        // format YYYY-MM-DD
        const yyyy = tanggalSelesaiEdit.getFullYear();
        const mm = String(tanggalSelesaiEdit.getMonth() + 1).padStart(2, '0'); // bulan 0-11
        const dd = String(tanggalSelesaiEdit.getDate()).padStart(2, '0');
        tanggalSelesaiInputEdit.value = `${yyyy}-${mm}-${dd}`;

        document.getElementById('idServicesThatYouChoose_edit').innerText = jenisLayananEdit;
        document.getElementById('subtotal_edit').innerText = "Rp0,-";
        document.getElementById('totalHarga_edit').innerText = "Rp0,-";
        document.getElementById('id_totalBayar_edit').value = "0";
        document.getElementById('id_kembalian_edit').value = "0";
    }

    function JustHitungTotalEdit(inputValue){
        // Ambil select layanan
        const selectLayananEdit = document.getElementById('selectLayanan_edit');
        const selectedOptionEdit = selectLayananEdit.options[selectLayananEdit.selectedIndex];

        if(!selectedOptionEdit || selectedOptionEdit.value === "") {
            // Jika belum pilih layanan, subtotal tetap 0
            document.getElementById('subtotal_edit').innerText = "Rp0,-";
            document.getElementById('totalHarga_edit').innerText = "Rp0,-";
            return;
        }

        const hargaEdit = parseFloat(selectedOptionEdit.getAttribute('data-harga-edit')); // harga per Kg atau per Pcs
        const jenisEdit = selectedOptionEdit.getAttribute('data-jenis-edit'); // 'kiloan' atau 'pcs'

        // Ambil berat dan qty
        let beratEdit = parseFloat(document.getElementById('id_berat_edit').value) || 0;
        let qtyEdit = parseFloat(document.getElementById('id_qty_edit').value) || 0;

        // Hitung subtotal sesuai jenis
        let subtotalEdit = 0;
        if(jenisEdit == 'kiloan'){
            subtotalEdit = hargaEdit * beratEdit;
        } else {
            subtotalEdit = hargaEdit * qtyEdit;
        }

        // Tampilkan di Ringkasan Pembayaran
        const formatRpEdit = new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0  }).format(subtotalEdit);
        document.getElementById('subtotal_edit').innerText = formatRpEdit + '.-';
        document.getElementById('totalHarga_edit').innerText = formatRpEdit + '.-';
        document.getElementById('id_total_edit').value = subtotalEdit;
        // Tampilkan juga nama layanan yang dipilih
        let jumlahEdit = jenisEdit == 'kiloan'? beratEdit : qtyEdit;
        let satuanEdit = jenisEdit == 'kiloan'? 'Kg' : 'Pcs';
        document.getElementById('idServicesThatYouChoose_edit').innerText = selectedOptionEdit.getAttribute('data-layanan-edit') + ' (' + jumlahEdit + ' ' + satuanEdit + ')';
        HitungKembalianEdit();
    }

    function HitungKembalianEdit() {
        // Ambil total dari hidden input
        let totalEdit = parseFloat(document.getElementById('id_total_edit').value) || 0;
        let bitch = document.getElementById('id_totalBayar_edit').value;
        // Bersihkan input (hapus titik dan karakter selain angka)
        let bayarBersihEdit = bitch.replace(/[^0-9]/g, '');
        let bayarEdit = parseFloat(bayarBersihEdit) || 0;

        // Hitung kembalian
        let kembalianEdit = (bayarEdit - totalEdit) >= 0 ? (bayarEdit - totalEdit) : 0;
        console.log(bayarEdit, totalEdit, kembalianEdit);

        // Jika kembalian negatif, tetap tampil angka minus
        // Format angka ke Rupiah
        const formatRpEdit = new Intl.NumberFormat('id-ID', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(kembalianEdit);

        // Tampilkan ke input kembalian
        document.getElementById('id_kembalian_edit').value = formatRpEdit;

        // Kembalikan format input total bayar sebagai Rp
        const formatBayarEdit = new Intl.NumberFormat('id-ID', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(bayarEdit);

        document.getElementById('id_totalBayar_edit').value = formatBayarEdit;
    }
</script>
<script>
    function onclickCancelOrders(){
         Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data Order akan dibatalkan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6D28D9',
            confirmButtonText: 'Ya, Batalkan!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('cancelFormOrders').submit();
            }
        });
    }

    function onclickChangeOrders(){
         Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Status Order Ini diubah!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6D28D9',
            confirmButtonText: 'Ya, Ubah!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('idChangeStatusOrder').submit();
            }
        });
    }
</script>
<script>
    function ChangeThisStatusOrder(status){
        document.getElementById('id_change_status_order').value = status;
    }
</script>
<script>
function printOrder(idOrder) {
    Swal.fire({
        title: 'Print Struk?',
        text: "Apakah Anda yakin ingin mencetak struk?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6D28D9',
        confirmButtonText: 'Ya, Cetak!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {

            // 1. Buka tab baru ke controller print struk
            let newTab = window.open(`/orders/print-struk/${idOrder}`, '_blank');

            // 2. Refresh halaman saat tab baru selesai dibuka
            setTimeout(() => {
                window.location.reload();
            }, 800);
        }
    });
}
</script>
@endsection
