<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaundryPOS - Professional Laundry Management System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: blob 8s ease-in-out infinite;
        }

        @keyframes blob {
            0%, 100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }
            50% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-50 via-white to-indigo-50 overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-lg border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 gradient-bg rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold gradient-text">LaundryPOS</h1>
                        <p class="text-xs text-gray-500 -mt-1">Management System</p>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-purple-600 font-medium transition">Home</a>
                    <a href="#services" class="text-gray-700 hover:text-purple-600 font-medium transition">Services</a>
                    <a href="#features" class="text-gray-700 hover:text-purple-600 font-medium transition">Features</a>
                    <a href="#about" class="text-gray-700 hover:text-purple-600 font-medium transition">About Us</a>
                    <a href="{{ route('login') }}" class="px-6 py-2.5 gradient-bg text-white rounded-xl font-semibold hover:shadow-xl transition transform hover:scale-105">
                        Login
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg hover:bg-gray-100" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Decorative Blobs -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-purple-300 opacity-20 blob"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-indigo-300 opacity-20 blob" style="animation-delay: -4s;"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="animate-fade-in">
                    <div class="inline-flex items-center space-x-2 px-4 py-2 bg-purple-100 rounded-full text-purple-700 font-medium text-sm mb-6">
                        <span class="w-2 h-2 bg-purple-600 rounded-full animate-pulse"></span>
                        <span>Solusi Laundry Modern</span>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-black text-gray-900 leading-tight mb-6">
                        Kelola Bisnis <br>
                        <span class="gradient-text">Laundry Anda</span> <br>
                        dengan Mudah
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Sistem manajemen laundry all-in-one yang powerful, cepat, dan mudah digunakan.
                        Tingkatkan efisiensi operasional Anda hingga 300%.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('login') }}" class="px-8 py-4 gradient-bg text-white rounded-2xl font-bold text-lg hover:shadow-2xl transition transform hover:scale-105 text-center">
                            Mulai Sekarang
                        </a>
                        <a href="#features" class="px-8 py-4 bg-white border-2 border-gray-200 text-gray-800 rounded-2xl font-bold text-lg hover:border-purple-400 transition text-center">
                            Lihat Fitur
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12 pt-12 border-t border-gray-200">
                        <div>
                            <p class="text-3xl font-black gradient-text">500+</p>
                            <p class="text-sm text-gray-600 font-medium">Orders/Bulan</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black gradient-text">99.9%</p>
                            <p class="text-sm text-gray-600 font-medium">Uptime</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black gradient-text">24/7</p>
                            <p class="text-sm text-gray-600 font-medium">Support</p>
                        </div>
                    </div>
                </div>

                <!-- Right Image/Illustration -->
                <div class="relative floating">
                    <div class="glass-card rounded-3xl p-8 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1582735689369-4fe89db7114c?w=800" alt="Laundry" class="rounded-2xl w-full h-auto shadow-lg">

                        <!-- Floating Card 1 -->
                        <div class="absolute -top-6 -left-6 bg-white rounded-2xl shadow-xl p-4 animate-fade-in" style="animation-delay: 0.5s;">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Order Selesai</p>
                                    <p class="text-xs text-gray-500">+25 hari ini</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Card 2 -->
                        <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-4 animate-fade-in" style="animation-delay: 1s;">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Pendapatan</p>
                                    <p class="text-lg font-bold gradient-text">Rp 2.5jt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4">
                    Layanan <span class="gradient-text">Kami</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Berbagai pilihan layanan laundry profesional untuk memenuhi kebutuhan Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service Card 1 -->
                <div class="card-hover bg-gradient-to-br from-purple-50 to-indigo-50 rounded-3xl p-8 border border-purple-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Cuci Kiloan</h3>
                    <p class="text-gray-600 mb-4">Mulai dari <span class="text-2xl font-black gradient-text">8K</span>/kg</p>
                    <p class="text-sm text-gray-500">Cuci bersih dengan detergen premium. Selesai dalam 48 jam.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="card-hover bg-gradient-to-br from-blue-50 to-cyan-50 rounded-3xl p-8 border border-blue-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Express</h3>
                    <p class="text-gray-600 mb-4">Mulai dari <span class="text-2xl font-black text-blue-600">12K</span>/kg</p>
                    <p class="text-sm text-gray-500">Layanan kilat! Selesai dalam 24 jam atau gratis.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="card-hover bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 borde
