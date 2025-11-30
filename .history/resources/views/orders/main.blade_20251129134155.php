<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Laundry - CleanPro Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        .sidebar-collapsed {
            width: 80px;
        }

        .menu-item {
            transition: all 0.2s ease;
        }

        .menu-item:hover {
            background: rgba(102, 126, 234, 0.1);
            border-left: 4px solid #667eea;
        }

        .menu-item.active {
            background: rgba(102, 126, 234, 0.15);
            border-left: 4px solid #667eea;
            color: #667eea;
        }

        .tab-button {
            transition: all 0.3s ease;
        }

        .tab-button.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hover-scale {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-scale:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .status-badge {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .8; }
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar bg-gray-900 text-gray-300 w-64 flex-shrink-0 overflow-y-auto">
            <div class="p-6">
                <!-- Logo -->
                <div class="flex items-center space-x-3 mb-10">
                    <div class="w-10 h-10 gradient-primary rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white sidebar-text">CleanPro</span>
                </div>

                <!-- Menu -->
                <nav class="space-y-2">
                    <!-- Dashboard -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Dashboard</span>
                    </a>

                    <!-- Order -->
                    <div class="space-y-1">
                        <a href="#" class="menu-item active flex items-center space-x-3 px-4 py-3 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            <span class="sidebar-text font-medium">Order</span>
                            <span class="ml-auto bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">12</span>
                        </a>
                    </div>

                    <!-- Layanan -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Layanan</span>
                    </a>

                    <!-- Proses Laundry -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Proses Laundry</span>
                    </a>

                    <!-- Customer -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Customer</span>
                    </a>

                    <!-- Pembayaran -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Pembayaran</span>
                    </a>

                    <!-- Laporan -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Laporan</span>
                    </a>

                    <div class="border-t border-gray-700 my-4"></div>

                    <!-- User Management -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Kelola User</span>
                    </a>

                    <!-- Settings -->
                    <a href="#" class="menu-item flex items-center space-x-3 px-4 py-3 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="sidebar-text font-medium">Pengaturan</span>
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <!-- Header -->
            <header class="bg-white border-b border-gray-200 px-8 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <button id="sidebarToggle" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">Order Laundry</h1>
                            <p class="text-sm text-gray-500">Kelola semua order laundry pelanggan 🧺</p>
                        </div>
                    </div>

                    <!-- User Info & Logout -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-3 bg-gray-50 rounded-xl px-4 py-2 border border-gray-200">
                            <div class="w-9 h-9 gradient-primary rounded-full flex items-center justify-center text-white font-bold text-sm">
                                AS
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Admin Sari</p>
                                <p class="text-xs text-gray-500">Kasir</p>
                            </div>
                        </div>
                        <button class="flex items-center space-x-2 px-4 py-2 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition font-medium">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            <span>Logout</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-8">
                
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

                      <div class="flex space-x-3">
                                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition font-medium text-sm flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                                        </svg>
                                        <span>Filter</span>
                                    </button>
                                    <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition font-medium text-sm flex items-center space-x-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                        </svg>
                                        <span>Export</span>
                                    </button>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">No. Invoice</th>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Customer</th>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Masuk</th>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Layanan</th>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Berat/Item</th>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                                            <th class="text-left py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Est. Selesai</th>
                                            <th class="text-right py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Total</th>
                                            <th class="text-center py-4 px-6 text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <!-- Row 1 -->
                                        <tr class="hover:bg-gray-50 transition">
                                            <td class="py-4 px-6">
                                                <span class="font-bold text-gray-900">#LDY-1027</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-9 h-9 bg-purple-100 rounded-full flex items-center justify-center">
                                                        <span class="text-purple-600 font-semibold text-sm">RK</span>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-gray-900">Rina Kusuma</p>
                                                        <p class="text-xs text-gray-500">0812-3456-7890</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">29 Nov 2024</p>
                                                <p class="text-xs text-gray-500">10:30 WIB</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-medium text-gray-900">Cuci Kering Express</p>
                                                <span class="inline-block mt-1 px-2 py-1 bg-orange-100 text-orange-700 text-xs rounded-full font-semibold">Express</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-semibold text-gray-900">7 kg</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <span class="px-3 py-1.5 bg-yellow-100 text-yellow-700 text-xs font-bold rounded-full">Proses</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">29 Nov 2024</p>
                                                <p class="text-xs text-gray-500">18:00 WIB</p>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <p class="font-bold text-gray-900">Rp 105.000</p>
                                                <p class="text-xs text-green-600 font-semibold">Lunas</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Lihat Detail">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition" title="Edit">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
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
                                                <span class="font-bold text-gray-900">#LDY-1026</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-9 h-9 bg-green-100 rounded-full flex items-center justify-center">
                                                        <span class="text-green-600 font-semibold text-sm">DL</span>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-gray-900">Dewi Lestari</p>
                                                        <p class="text-xs text-gray-500">0813-2345-6789</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">29 Nov 2024</p>
                                                <p class="text-xs text-gray-500">09:15 WIB</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-medium text-gray-900">Cuci + Setrika</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-semibold text-gray-900">4 kg</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <span class="px-3 py-1.5 bg-green-100 text-green-700 text-xs font-bold rounded-full">Siap Diambil</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">30 Nov 2024</p>
                                                <p class="text-xs text-gray-500">10:00 WIB</p>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <p class="font-bold text-gray-900">Rp 32.000</p>
                                                <p class="text-xs text-green-600 font-semibold">Lunas</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Lihat Detail">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition" title="Edit">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
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
                                                <span class="font-bold text-gray-900">#LDY-1025</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-9 h-9 bg-blue-100 rounded-full flex items-center justify-center">
                                                        <span class="text-blue-600 font-semibold text-sm">AF</span>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-gray-900">Ahmad Fauzi</p>
                                                        <p class="text-xs text-gray-500">0811-9876-5432</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">28 Nov 2024</p>
                                                <p class="text-xs text-gray-500">14:20 WIB</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-medium text-gray-900">Cuci Satuan - Jas</p>
                                                <span class="inline-block mt-1 px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-semibold">Satuan</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-semibold text-gray-900">2 pcs</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <span class="px-3 py-1.5 bg-blue-100 text-blue-700 text-xs font-bold rounded-full">Setrika</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">30 Nov 2024</p>
                                                <p class="text-xs text-gray-500">15:00 WIB</p>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <p class="font-bold text-gray-900">Rp 50.000</p>
                                                <p class="text-xs text-red-600 font-semibold">Belum Bayar</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Lihat Detail">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition" title="Edit">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
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
                                                <span class="font-bold text-gray-900">#LDY-1024</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-9 h-9 bg-yellow-100 rounded-full flex items-center justify-center">
                                                        <span class="text-yellow-600 font-semibold text-sm">SA</span>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-gray-900">Siti Aminah</p>
                                                        <p class="text-xs text-gray-500">0814-5678-9012</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">28 Nov 2024</p>
                                                <p class="text-xs text-gray-500">11:45 WIB</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-medium text-gray-900">Cuci Kering</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-semibold text-gray-900">3 kg</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <span class="px-3 py-1.5 bg-yellow-100 text-yellow-700 text-xs font-bold rounded-full">Dicuci</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">30 Nov 2024</p>
                                                <p class="text-xs text-gray-500">12:00 WIB</p>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <p class="font-bold text-gray-900">Rp 30.000</p>
                                                <p class="text-xs text-green-600 font-semibold">Lunas</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Lihat Detail">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition" title="Edit">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
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
                                                <span class="font-bold text-gray-900">#LDY-1023</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-9 h-9 bg-red-100 rounded-full flex items-center justify-center">
                                                        <span class="text-red-600 font-semibold text-sm">BS</span>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-gray-900">Budi Santoso</p>
                                                        <p class="text-xs text-gray-500">0815-1234-5678</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">27 Nov 2024</p>
                                                <p class="text-xs text-gray-500">16:30 WIB</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-medium text-gray-900">Cuci + Setrika Express</p>
                                                <span class="inline-block mt-1 px-2 py-1 bg-orange-100 text-orange-700 text-xs rounded-full font-semibold">Express</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm font-semibold text-gray-900">5 kg</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <span class="px-3 py-1.5 bg-red-100 text-red-700 text-xs font-bold rounded-full">Menunggu</span>
                                            </td>
                                            <td class="py-4 px-6">
                                                <p class="text-sm text-gray-900">28 Nov 2024</p>
                                                <p class="text-xs text-red-500">Terlambat</p>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <p class="font-bold text-gray-900">Rp 75.000</p>
                                                <p class="text-xs text-green-600 font-semibold">Lunas</p>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Lihat Detail">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                        </svg>
                                                    </button>
                                                    <button class="p-2 text-green-600 hover:bg-green-50 rounded-lg transition" title="Edit">
                                                        <svg class="w-5 h-5" fill="none" stroke