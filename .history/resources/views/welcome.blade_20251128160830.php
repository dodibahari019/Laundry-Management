<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshWash Laundry - Solusi Laundry Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="fixed w-full bg-white/80 backdrop-blur-md z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-gray-800">FreshWash</span>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-purple-600 transition">Beranda</a>
                    <a href="#services" class="text-gray-600 hover:text-purple-600 transition">Layanan</a>
                    <a href="#pricing" class="text-gray-600 hover:text-purple-600 transition">Harga</a>
                    <a href="#about" class="text-gray-600 hover:text-purple-600 transition">Tentang</a>
                </div>

                <a href="/login" class="gradient-bg text-white px-6 py-2 rounded-lg hover:opacity-90 transition">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-20 gradient-bg relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center py-12">
                <div class="text-white">
                    <div class="inline-block glass-effect px-4 py-2 rounded-full mb-6">
                        <span class="text-sm">✨ Laundry Kilat & Terpercaya</span>
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Laundry Jadi <span class="text-yellow-300">Mudah</span> & Cepat
                    </h1>
                    <p class="text-lg mb-8 text-gray-100">
                        Sistem manajemen laundry modern dengan layanan cepat, praktis, dan hasil sempurna.
                        Serahkan cucianmu pada kami!
                    </p>
                    <div class="flex space-x-4">
                        <a href="#services" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Cek Layanan
                        </a>
                        <a href="#pricing" class="glass-effect text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/20 transition">
                            Lihat Harga
                        </a>
                    </div>
                </div>

                <div class="relative animate-float">
                    <div class="glass-effect rounded-3xl p-8 shadow-2xl">
                        <div class="bg-white rounded-2xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-semibold text-gray-600">Status Order</span>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">Ready</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Order #LDY-001</span>
                                    <span class="font-semibold">Rp 24.000</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-600 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                                <div class="grid grid-cols-4 gap-2 text-center text-xs">
                                    <div class="text-purple-600 font-semibold">✓ Diterima</div>
                                    <div class="text-purple-600 font-semibold">✓ Dicuci</div>
                                    <div class="text-purple-600 font-semibold">✓ Disetrika</div>
                                    <div class="text-purple-600 font-semibold">✓ Siap</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Decoration -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
                <p class="text-gray-600 text-lg">Pilih layanan yang sesuai dengan kebutuhanmu</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-2xl p-8 hover-lift">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cuci Kiloan</h3>
                    <p class="text-gray-600 mb-4">Layanan cuci pakaian per kilogram dengan harga terjangkau. Proses cepat 2-3 hari.</p>
                    <div class="text-purple-600 font-semibold">Mulai dari Rp 8.000/kg</div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-2xl p-8 hover-lift">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cuci Express</h3>
                    <p class="text-gray-600 mb-4">Butuh cepat? Layanan kilat 24 jam siap melayani kebutuhan mendesakmu.</p>
                    <div class="text-purple-600 font-semibold">Mulai dari Rp 15.000/kg</div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-2xl p-8 hover-lift">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cuci Satuan</h3>
                    <p class="text-gray-600 mb-4">Layanan cuci per potong untuk pakaian spesial seperti jas, gaun, dan lainnya.</p>
                    <div class="text-purple-600 font-semibold">Mulai dari Rp 5.000/pcs</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Daftar Harga</h2>
                <p class="text-gray-600 text-lg">Harga transparan tanpa biaya tersembunyi</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl p-8 border-2 border-purple-200">
                    <h3 class="text-2xl font
