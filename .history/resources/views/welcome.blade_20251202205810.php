<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CleanPro Laundry - Sistem Laundry Modern</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    <div class="text-5xl font-extrabold text-orange-600 mb-3">1,200+</div>
                    <p class="text-gray-600 font-semibold">Cucian Selesai</p>
                </div>
                <div class="text-center hover-scale bg-gradient-to-br from-pink-50 to-rose-50 rounded-3xl p-8 border border-pink-100">
                    <div class="text-5xl font-extrabold text-pink-600 mb-3">24 Jam</div>
                    <p class="text-gray-600 font-semibold">Layanan Express</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Kenapa Pilih Kami?</h2>
                <p class="text-xl text-gray-600">Keunggulan yang membuat kami berbeda</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Proses Cepat</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sistem otomatis yang efisien membuat proses cucian Anda lebih cepat tanpa mengorbankan kualitas hasil.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Jaminan Kualitas</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Menggunakan deterjen berkualitas tinggi dan proses pencucian standar premium untuk hasil maksimal.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Tracking Real-Time</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pantau status cucian Anda kapan saja dan dimana saja melalui sistem tracking yang mudah digunakan.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Antar Jemput</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Layanan gratis antar jemput dalam radius tertentu. Hemat waktu dan tenaga Anda dengan layanan ini.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Harga Terjangkau</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Harga kompetitif dengan kualitas premium. Tidak ada biaya tersembunyi, semua transparan untuk Anda.
                    </p>
                </div>

                <div class="bg-white rounded-3xl p-10 hover-scale shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Customer Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tim customer service siap membantu Anda 24/7 untuk menjawab pertanyaan dan keluhan Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Kata Mereka</h2>
                <p class="text-xl text-gray-600">Testimoni pelanggan setia kami</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-3xl p-8 hover-scale border border-purple-100">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Pelayanan sangat cepat dan hasilnya bersih wangi! Sistem tracking-nya juga memudahkan untuk pantau status cucian. Recommended banget!"
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 gradient-primary rounded-full flex items-center justify-center text-white font-bold text-lg">
                            AS
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Andini Saraswati</p>
                            <p class="text-sm text-gray-500">Mahasiswi</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 hover-scale border border-green-100">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Sebagai pekerja kantoran yang sibuk, layanan antar jemput ini sangat membantu. Harga juga masih terjangkau dengan kualitas prima."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            BP
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Budi Prasetyo</p>
                            <p class="text-sm text-gray-500">Karyawan Swasta</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-yellow-50 rounded-3xl p-8 hover-scale border border-orange-100">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8
<svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Layanan cuci satuan untuk jas kerja saya hasilnya sempurna! Rapi dan wangi. Pasti jadi langganan saya terus."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-yellow-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            CH
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Citra Handayani</p>
                            <p class="text-sm text-gray-500">Pengusaha</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 gradient-primary relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Siap Mencoba Layanan Kami?
            </h2>
            <p class="text-xl text-purple-100 mb-10 leading-relaxed">
                Daftar sekarang dan nikmati promo khusus untuk pelanggan baru!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register" class="bg-white text-purple-600 px-12 py-5 rounded-2xl font-bold text-lg hover:bg-purple-50 transition shadow-2xl">
                    Daftar Sekarang
                </a>
                <a href="https://wa.me/6281234567890" class="glass-card text-gray-900 px-12 py-5 rounded-2xl font-bold text-lg hover:bg-white/30 transition shadow-xl flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-11 h-11 gradient-primary rounded-xl flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-white">CleanPro</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed">
                        Sistem manajemen laundry modern yang memudahkan hidup Anda.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Layanan</h4>
                    <ul class="space-y-3">
                        <li><a href="#layanan" class="hover:text-purple-400 transition">Cuci Kiloan</a></li>
                        <li><a href="#layanan" class="hover:text-purple-400 transition">Cuci Express</a></li>
                        <li><a href="#layanan" class="hover:text-purple-400 transition">Cuci Satuan</a></li>
                        <li><a href="#layanan" class="hover:text-purple-400 transition">Antar Jemput</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Perusahaan</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-purple-400 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Karir</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Blog</a></li>
                        <li><a href="#" class="hover:text-purple-400 transition">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-4">Hubungi Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-400">Jl. Contoh No. 123, Bandung</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-400">info@cleanpro.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-purple-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-400">+62 812-3456-7890</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-gray-400 text-sm">
                        © 2024 CleanPro Laundry. All rights reserved.
                    </p>
                    <div class="flex gap-6">
                        <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Smooth Scroll Script -->
    <script>
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
    </script>

</body>
</html>
