@extends('layouts.frame')
@section('Title', 'Orders')
@section('CssSection')

@endsection
@section('HeaderTitle', 'Manajemen Order')
@section('Description', 'Kelola pesanan laundry dari pelanggan')
@section('MainContentArea')
                
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
        // Revenue Chart
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Pendapatan (Ribu)',
                    data: [450, 520, 380, 650, 720, 890, 800],
                    backgroundColor: 'rgba(102, 126, 234, 0.1)',
                    borderColor: 'rgba(102, 126, 234, 1)',
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: 'rgba(102, 126, 234, 1)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        cornerRadius: 8,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return 'Rp ' + context.parsed.y + '.000';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)',
                            drawBorder: false
                        },
                        ticks: {
                            callback: function(value) {
                                return value + 'k';
                            },
                            color: '#9CA3AF',
                            font: {
                                size: 11
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#9CA3AF',
                            font: {
                                size: 11
                            }
                        }
                    }
                }
            }
        });

        // Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarTexts = document.querySelectorAll('.sidebar-text');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-collapsed');
            
            sidebarTexts.forEach(text => {
                text.classList.toggle('hidden');
            });
        });

        // Search functionality (placeholder)
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('input', (e) => {
            console.log('Searching for:', e.target.value);
            // Add your search logic here
        });

        // Quick stats animation on load
        window.addEventListener('load', () => {
            const statCards = document.querySelectorAll('.hover-scale');
            statCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'all 0.5s ease';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                }, index * 100);
            });
        });

        // Add click handlers for buttons (placeholder)
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', (e) => {
                // Prevent default for demo
                if (button.textContent.includes('Proses') || 
                    button.textContent.includes('Update') || 
                    button.textContent.includes('Selesai')) {
                    e.preventDefault();
                    console.log('Button clicked:', button.textContent);
                    // Add your actual functionality here
                }
            });
        });

        // Notification badge animation
        setInterval(() => {
            const notificationBadges = document.querySelectorAll('.notification-dot');
            notificationBadges.forEach(badge => {
                badge.style.animation = 'none';
                setTimeout(() => {
                    badge.style.animation = 'ping 1s cubic-bezier(0, 0, 0.2, 1) infinite';
                }, 10);
            });
        }, 3000);

        // Table row hover effect
        const tableRows = document.querySelectorAll('tbody tr');
        tableRows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.style.transform = 'scale(1.01)';
                row.style.transition = 'transform 0.2s ease';
            });
            
            row.addEventListener('mouseleave', () => {
                row.style.transform = 'scale(1)';
            });
        });

        // Status badge pulse animation
        const statusBadges = document.querySelectorAll('.status-badge');
        statusBadges.forEach(badge => {
            setInterval(() => {
                badge.style.opacity = '0.8';
                setTimeout(() => {
                    badge.style.opacity = '1';
                }, 500);
            }, 2000);
        });

        // Add real-time clock to header
        function updateClock() {
            const now = new Date();
            const options = { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            const timeString = now.toLocaleDateString('id-ID', options);
            
            // You can add a clock element to the header if needed
            console.log('Current time:', timeString);
        }

        setInterval(updateClock, 60000); // Update every minute
        updateClock(); // Initial call

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading state for buttons
        document.querySelectorAll('button.gradient-primary').forEach(button => {
            button.addEventListener('click', function() {
                const originalText = this.innerHTML;
                this.innerHTML = `
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                `;
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 1000);
            });
        });

        // Auto-hide notifications after 5 seconds
        setTimeout(() => {
            const notificationDots = document.querySelectorAll('.notification-dot');
            notificationDots.forEach(dot => {
                dot.style.animation = 'none';
            });
        }, 5000);

        console.log('CleanPro Dashboard loaded successfully! 🎉');
    </script>
@endsection
