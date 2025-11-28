<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry POS - Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .feature-card {
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.15);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">

    <div class="max-w-6xl w-full">

        <!-- Main Container -->
        <div class="grid lg:grid-cols-2 gap-8 items-center">

            <!-- Left Side - Branding & Info -->
            <div class="text-white animate-fade-in">
                <!-- Logo & Title -->
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold">Laundry POS</h1>
                            <p class="text-white/80 text-sm">Management System</p>
                        </div>
                    </div>
                    <p class="text-lg text-white/90 leading-relaxed">
                        Sistem manajemen laundry terintegrasi untuk operasional harian, tracking order, pembayaran, dan laporan bisnis.
                    </p>
                </div>

                <!-- Features List -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold">Manajemen Order Real-time</h3>
                            <p class="text-sm text-white/70">Tracking status dari penerimaan hingga pengambilan</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold">Pembayaran Multi-metode</h3>
                            <p class="text-sm text-white/70">Cash, Transfer, QRIS dengan bukti transaksi</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold">Laporan & Audit Log</h3>
                            <p class="text-sm text-white/70">Laporan transaksi dan riwayat perubahan lengkap</p>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20 text-center">
                        <div class="text-2xl font-bold mb-1">3</div>
                        <div class="text-xs text-white/70">Role Akses</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20 text-center">
                        <div class="text-2xl font-bold mb-1">Real-time</div>
                        <div class="text-xs text-white/70">Tracking</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20 text-center">
                        <div class="text-2xl font-bold mb-1">Secure</div>
                        <div class="text-xs text-white/70">System</div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Login Card -->
            <div class="animate-fade-in">
                <div class="glass-card rounded-3xl shadow-2xl p-8 lg:p-10">

                    <!-- Login Header -->
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Login Karyawan</h2>
                        <p class="text-gray-600">Masukkan kredensial untuk mengakses sistem</p>
                    </div>

                    <!-- Login Form -->
                    <form action="/login" method="POST" class="space-y-6">

                        <!-- Username -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Username</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <input
                                    type="text"
                                    name="username"
                                    placeholder="Masukkan username"
                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <input
                                    type="password"
                                    name="password"
                                    placeholder="Masukkan password"
                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:outline-none transition"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Remember & Forgot -->
                        <div class="flex items-center justify-between text-sm">
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                <span class="text-gray-600">Ingat saya</span>
                            </label>
                            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold">Lupa password?</a>
                        </div>

                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="w-full gradient-bg text-white py-3 rounded-xl font-semibold text-lg hover:opacity-90 transition shadow-lg hover:shadow-xl"
                        >
                            Login ke Sistem
                        </button>
                    </form>

                    <!-- Role Info -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-600 text-center mb-3">Role yang tersedia:</p>
                        <div class="flex justify-center space-x-3">
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-lg text-xs font-semibold">Admin</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg text-xs font-semibold">Kasir</span>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-lg text-xs font-semibold">Petugas</span>
                        </div>
                    </div>

                    <!-- Demo Credential -->
                    <div class="mt-6 bg-yellow-50 border border-yellow-200 rounded-xl p-4">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-yellow-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="text-sm">
                                <p class="font-semibold text-yellow-800 mb-1">Demo Admin:</p>
                                <p class="text-yellow-700">Username: <code class="bg-yellow-100 px-2 py-0.5 rounded">admin</code></p>
                                <p class="text-yellow-700">Password: <code class="bg-yellow-100 px-2 py-0.5 rounded">admin1234</code></p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Footer Note -->
                <div class="mt-6 text-center text-white/70 text-sm">
                    <p>🔒 Sistem hanya dapat diakses oleh karyawan terdaftar</p>
                </div>
            </div>

        </div>

        <!-- Bottom Info -->
        <div class="mt-12 text-center text-white/60 text-sm">
            <p>&copy; 2024 Laundry Management System - UTS Project Kelompok [Nama Kelompok]</p>
        </div>

    </div>

</body>
</html>
