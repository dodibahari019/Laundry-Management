<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanPro Laundry - Sistem Laundry Modern</title>
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

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hover-scale {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover-scale:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-lg z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-11 h-11 gradient-primary rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-gray-900">CleanPro</span>
                </div>

                <div class="hidden md:flex items-center space-x-10">
                    <a href="#beranda" class="text-gray-700 hover:text-purple-600 font-medium transition">Beranda</a>
                    <a href="#layanan" class="text-gray-700 hover:text-purple-600 font-medium transition">Layanan</a>
                    <a href="#harga" class="text-gray-700 hover:text-purple-600 font-medium transition">Harga</a>
                    <a href="#tracking" class="text-gray-700 hover:text-purple-600 font-medium transition">Tracking</a>
                </div>

                <a href="/login" class="gradient-primary text-white px-7 py-2.5 rounded-xl font-semibold hover:opacity-90 transition shadow-lg">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="pt-32 pb-24 gradient-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="text-white fade-in">
                    <div class="inline-flex items-center glass-card px-5 py-2.5 rounded-full mb-8 shadow-xl">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                        <span class="text-sm font-medium text-gray-800">Sistem Laundry Terpercaya</span>
                    </div>

                    <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                        Laundry Jadi<br/>
                        <span class="text-yellow-300">Mudah & Cepat</span>
                    </h1>

                    <p class="text-xl mb-10 text-purple-100 leading-relaxed">
                        Sistem manajemen laundry modern dengan tracking real-time,
                        proses cepat, dan hasil yang memuaskan.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#layanan" class="bg-white text-purple-600 px-10 py-4 rounded-xl font-bold text-lg hover:bg-purple-50 transition shadow-2xl text-center">
                            Lihat Layanan
                        </a>
                        <a href="#tracking" class="glass-card text-gray-900 px-10 py-4 rounded-xl font-bold text-lg hover:bg-white/30 transition shadow-xl text-center">
                            Cek Status
                        </a>
                    </div>
                </div>

                <div class="relative floating">
                    <div class="glass-card rounded-3xl p-8 shadow-2xl">
                        <div class="bg-white rounded-2xl p-8 shadow-lg">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <p class="text-sm text-gray-500 font-medium mb-1">Status Pesanan</p>
                                    <p class="text-2xl font-bold text-gray-900">#LDY-2401</p>
                                </div>
                                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-bold">
                                    ✓ Selesai
                                </span>
                            </div>

                            <div class="space-y-5">
                                <div class="flex justify-between items-center pb-4 border-b border-gray-100">
                                    <span class="text-gray-600 font-medium">Total Biaya</span>
                                    <span class="text-2xl font-bold gradient-text">Rp 32.000</span>
                                </div>

                                <div class="space-y-3">
                                    <div class="w-full bg-gray-100 rounded-full h-3">
                                        <div class="gradient-primary h-3 rounded-full transition-all duration-500" style="width: 100%"></div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="text-center">
                                            <div class="w-10 h-10 gradient-primary rounded-full flex items-center justify-center mx-auto mb-2">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <p class="text-xs font-semibold text-purple-600">Diterima</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="w-10 h-10 gradient-primary rounded-full flex items-center justify-center mx-auto mb-2">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <p class="text-xs font-semibold text-purple-600">Proses</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="w-10 h-10 gradient-primary rounded-full flex items-center justify-center mx-auto mb-2">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <p class="text-xs font-semibold text-purple-600">Setrika</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="w-10 h-10 gradient-primary rounded-full flex items-center justify-center mx-auto mb-2">
                                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <p class="text-xs font-semibold text-purple-600">Siap</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Bottom -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100L60 88.3C120 76.7 240 53.3 360 40C480 26.7 600 23.3 720 30C840 36.7 960 53.3 1080 60C1200 66.7 1320 63.3 1380 61.7L1440 60V100H1380C1320 100 1200 100 1080 100C960 100 840 100 720 100C600 100 480 100 360 100C240 100 120 100 60 100H0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Layanan Kami</h2>
                <p class="text-xl text-gray-600">Pilih layanan yang sesuai dengan kebutuhanmu</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg border border-gray-100">
                    <div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mb-6 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Cuci Kiloan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan cuci pakaian per kilogram dengan harga terjangkau. Cocok untuk kebutuhan sehari-hari.
                    </p>
                    <div class="gradient-text text-2xl font-bold">Rp 8.000<span class="text-gray-500 text-lg">/kg</span></div>
                    <p class="text-sm text-gray-500 mt-2">Selesai 2-3 hari</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg border-2 border-purple-200">
                    <div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mb-6 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <h3 class="text-2xl font-bold text-gray-900">Cuci Express</h3>
                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">POPULER</span>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan kilat untuk kebutuhan mendesak. Proses cepat tanpa mengurangi kualitas hasil.
                    </p>
                    <div class="gradient-text text-2xl font-bold">Rp 15.000<span class="text-gray-500 text-lg">/kg</span></div>
                    <p class="text-sm text-gray-500 mt-2">Selesai 24 jam</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg border border-gray-100">
                    <div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mb-6 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Cuci Satuan</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Perawatan khusus untuk pakaian spesial seperti jas, gaun, dan item bernilai tinggi.
                    </p>
                    <div class="gradient-text text-2xl font-bold">Rp 20.000<span class="text-gray-500 text-lg">/pcs</span></div>
                    <p class="text-sm text-gray-500 mt-2">Perawatan Premium</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="harga" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Daftar Harga</h2>
                <p class="text-xl text-gray-600">Harga transparan tanpa biaya tersembunyi</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Pricing Card 1 -->
                <div class="bg-gradient-to-br from-purple-50 via-blue-50 to-purple-50 rounded-3xl p-10 border-2 border-purple-200 hover-scale">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">Paket Kiloan</h3>
                    </div>

                    <div class="space-y-5 mb-8">
                        <div class="flex justify-between items-center p-4 bg-white rounded-xl">
                            <span class="text-gray-700 font-medium">Cuci + Setrika</span>
                            <span class="text-xl font-bold gradient-text">Rp 8.000/kg</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white rounded-xl">
                            <span class="text-gray-700 font-medium">Cuci + Setrika Express</span>
                            <span class="text-xl font-bold gradient-text">Rp 15.000/kg</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white rounded-xl">
                            <span class="text-gray-700 font-medium">Cuci Kering</span>
                            <span class="text-xl font-bold gradient-text">Rp 10.000/kg</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-purple-100">
                        <p class="text-sm text-gray-600 font-medium">Minimal 3kg | Gratis antar-jemput</p>
                    </div>
                </div>

                <!-- Pricing Card 2 -->
                <div class="bg-gradient-to-br from-yellow-50 via-orange-50 to-yellow-50 rounded-3xl p-10 border-2 border-orange-200 hover-scale">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900">Paket Satuan</h3>
                    </div>

                    <div class="space-y-5 mb-8">
                        <div class="flex justify-between items-center p-4 bg-white rounded-xl">
                            <span class="text-gray-700 font-medium">Jas / Blazer</span>
                            <span class="text-xl font-bold text-orange-600">Rp 25.000/pcs</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white rounded-xl">
                            <span class="text-gray-700 font-medium">Gaun / Dress</span>
                            <span class="text-xl font-bold text-orange-600">Rp 30.000/pcs</span>
                        </div>
                        <div class="flex justify-between items-center p-4 bg-white rounded-xl">
                            <span class="text-gray-700 font-medium">Sepatu / Tas</span>
                            <span class="text-xl font-bold text-orange-600">Rp 20.000/pcs</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-orange-100">
                        <p class="text-sm text-gray-600 font-medium">Perawatan khusus | 💎 Hasil premium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Section -->
    <section id="tracking" class="py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Lacak Cucian Anda</h2>
                <p class="text-xl text-gray-600">Masukkan nomor nota untuk melihat status real-time</p>
            </div>

            <div class="bg-white rounded-3xl p-12 shadow-2xl border border-gray-100">
                <form class="space-y-6">
                    <div>
                        <label for="nota" class="block text-sm font-bold text-gray-700 mb-3">Nomor Nota</label>
                        <input
                            type="text"
                            id="nota"
                            name="nota"
                            placeholder="Contoh: LDY-2401-001"
                            class="w-full px-6 py-5 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-purple-100 focus:border-purple-500 transition text-lg"
                        >
                    </div>

                    <button
                        type="submit"
                        class="w-full gradient-primary text-white px-8 py-5 rounded-2xl font-bold text-lg hover:opacity-90 transition shadow-xl flex items-center justify-center"
                    >
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Cek Status Cucian
                    </button>
                </form>

                <div class="mt-8 p-6 bg-purple-50 rounded-2xl border-2 border-purple-100">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 mb-1">Tips Penting</p>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Nomor nota tercantum pada struk yang Anda terima saat menyerahkan cucian.
                                Simpan struk dengan baik untuk memudahkan tracking dan pengambilan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center hover-scale bg-gradient-to-br from-purple-50 to-blue-50 rounded-3xl p-8 border border-purple-100">
                    <div class="text-5xl font-extrabold gradient-text mb-3">500+</div>
                    <p class="text-gray-600 font-semibold">Pelanggan Aktif</p>
                </div>
                <div class="text-center hover-scale bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 border border-green-100">
                    <div class="text-5xl font-extrabold text-green-600 mb-3">98%</div>
                    <p class="text-gray-600 font-semibold">Tingkat Kepuasan</p>
                </div>
                <div class="text-center hover-scale bg-gradient-to-br from-yellow-50 to-orange-50 rounded-3xl p-8 border border-yellow-100">
                    <div class="text-5xl font-extrabold text-green-600 mb-3">98%</div>
                    <p class="text-gray-600 font-semibold">Tingkat Kepuasan</p>
                </div>
                <div class="text-center hover-scale bg-gradient-to-br from-yellow-50 to-orange-50 rounded-3xl p-8 border border-yellow-100">
                    <div class="text-5xl font-extrabold text-green-600 mb-3">98%</div>
                    <p class="text-gray-600 font-semibold">Tingkat Kepuasan</p>
                </div>
