<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Management System - Sistem Kelola Laundry Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gray-50">

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <span class="text-xl font-bold text-gray-800">CleanPro Laundry</span>
                </div>

                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-blue-600 transition">Home</a>
                    <a href="#layanan" class="text-gray-600 hover:text-blue-600 transition">Layanan</a>
                    <a href="#tracking" class="text-gray-600 hover:text-blue-600 transition">Tracking</a>
                    <a href="#kontak" class="text-gray-600 hover:text-blue-600 transition">Kontak</a>
                </div>

                <button class="md:hidden text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Sistem Laundry Modern untuk Bisnis yang Terkelola</h1>
                <p class="text-xl mb-8 text-blue-100">Kelola pesanan, lacak status cucian, dan tingkatkan efisiensi operasional laundry Anda dengan sistem terintegrasi.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#layanan" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">Lihat Layanan</a>
                    <a href="#tracking" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">Cek Status Cucian</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mengapa Memilih Kami -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menggunakan sistem manajemen yang memastikan setiap pesanan tercatat dengan baik dan dapat dilacak secara real-time.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Proses Cepat</h3>
                    <p class="text-gray-600">Sistem pencatatan otomatis mempercepat proses terima dan serah cucian kepada pelanggan.</p>
                </div>

                <div class="text-center p-6">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Terpercaya</h3>
                    <p class="text-gray-600">Setiap pesanan memiliki nomor nota unik untuk memudahkan pelacakan dan verifikasi.</p>
                </div>

                <div class="text-center p-6">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Tracking Real-Time</h3>
                    <p class="text-gray-600">Pelanggan dapat mengecek status cucian kapan saja dengan memasukkan nomor nota.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Daftar Layanan & Harga -->
    <section id="layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Daftar Layanan & Harga</h2>
                <p class="text-gray-600">Pilih layanan yang sesuai dengan kebutuhan Anda</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Cuci Kiloan</h3>
                    <p class="text-gray-600 mb-4">Cuci bersih dan wangi per kilogram</p>
                    <div class="text-2xl font-bold text-blue-600">Rp 7.000<span class="text-sm text-gray-500">/kg</span></div>
                    <p class="text-sm text-gray-500 mt-2">Estimasi: 2-3 hari</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-green-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Cuci + Setrika</h3>
                    <p class="text-gray-600 mb-4">Cuci, keringkan, dan setrika rapi</p>
                    <div class="text-2xl font-bold text-green-600">Rp 10.000<span class="text-sm text-gray-500">/kg</span></div>
                    <p class="text-sm text-gray-500 mt-2">Estimasi: 3-4 hari</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition border-2 border-orange-400">
                    <div class="text-orange-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Express</h3>
                    <p class="text-gray-600 mb-4">Layanan kilat selesai cepat</p>
                    <div class="text-2xl font-bold text-orange-600">Rp 15.000<span class="text-sm text-gray-500">/kg</span></div>
                    <p class="text-sm text-gray-500 mt-2">Estimasi: 1 hari</p>
                    <span class="inline-block bg-orange-100 text-orange-600 text-xs px-2 py-1 rounded mt-2">POPULER</span>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Setrika Saja</h3>
                    <p class="text-gray-600 mb-4">Khusus setrika tanpa cuci</p>
                    <div class="text-2xl font-bold text-purple-600">Rp 5.000<span class="text-sm text-gray-500">/kg</span></div>
                    <p class="text-sm text-gray-500 mt-2">Estimasi: 1-2 hari</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tracking Cucian -->
    <section id="tracking" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Lacak Status Cucian Anda</h2>
                    <p class="text-gray-600">Masukkan nomor nota yang Anda terima saat menyerahkan cucian</p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-8 shadow-md">
                    <form class="space-y-4">
                        <div>
                            <label for="nota" class="block text-sm font-medium text-gray-700 mb-2">Nomor Nota</label>
                            <input
                                type="text"
                                id="nota"
                                name="nota"
                                placeholder="Contoh: LND-20250128-001"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center"
                        >
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            Cek Status Cucian
                        </button>
                    </form>

                    <div class="mt-6 p-4 bg-white rounded-lg border border-blue-200">
                        <p class="text-sm text-gray-600">
                            <strong>Tips:</strong> Nomor nota tercantum pada struk yang Anda terima. Simpan struk dengan baik untuk memudahkan pelacakan dan pengambilan cucian.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <p class="text-gray-600">Untuk informasi lebih lanjut atau pertanyaan, silakan hubungi kami</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-blue-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Telepon</h3>
                    <p class="text-gray-600">+62 812-3456-7890</p>
                </div>

                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-green-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600">info@cleanprolaundry.com</p>
                </div>

                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="bg-purple-100 w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Alamat</h3>
                    <p class="text-gray-600">Jl. Merdeka No. 123<br>Bandung, Jawa Barat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <svg class="w-7 h-7 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        <span class="text-lg font-bold">CleanPro Laundry</span>
                    </div>
                    <p class="text-gray-400">Sistem manajemen laundry modern untuk pelayanan yang lebih baik dan terkelola.</p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Jam Operasional</h4>
                    <p class="text-gray-400">Senin - Sabtu: 08.00 - 20.00</p>
                    <p class="text-gray-400">Minggu: 09.00 - 17.00</p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Menu</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#home" class="hover:text-white transition">Home</a></li>
                        <li><a href="#layanan" class="hover:text-white transition">Layanan</a></li>
                        <li><a href="#tracking" class="hover:text-white transition">Tracking</a></li>
                        <li><a href="#kontak" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 CleanPro Laundry Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
