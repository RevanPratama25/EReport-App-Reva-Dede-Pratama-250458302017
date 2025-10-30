@extends('layouts.app')

{{-- 
  CATATAN: 
  Pastikan file `layouts.app.blade.php` Anda memiliki <body class="bg-slate-950"> 
  atau tambahkan `bg-slate-950` ke section pertama di sini jika body tidak terekspos.
  Kode di bawah ini mengasumsikan section akan mengisi body.
--}}

@section('title', 'Home')

@section('content')

    <!-- Header -->
    <header class="border-b border-slate-800 bg-slate-950/80 backdrop-blur-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-600/30">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-white">CEPUin App</h1>
                        <p class="text-sm text-slate-400">Suara Anda, Perubahan Nyata</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('login') }}">
                        <button
                            class="border border-slate-700 text-slate-300 px-4 py-2 rounded-md text-sm hover:bg-slate-800 hover:text-slate-100 transition-colors duration-200">
                            Masuk
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-500 transition-colors duration-200 shadow-md shadow-blue-600/30 hover:shadow-lg hover:shadow-blue-500/30">
                            Daftar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-24 md:py-32 px-4 bg-slate-950">
        <div class="container mx-auto text-center max-w-4xl">
            <span
                class="inline-block bg-slate-800 text-blue-400 font-medium px-4 py-1 rounded-full mb-6 text-sm">Platform
                Resmi Pemerintah</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-slate-100">
                Suara Anda Penting untuk <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-500">Perubahan</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 mb-10 max-w-2xl mx-auto">
                Laporkan masalah, keluhan, atau saran Anda kepada pemerintah. Bersama-sama kita wujudkan pelayanan publik
                yang lebih baik.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="bg-blue-600 text-white text-lg px-8 py-5 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors duration-200 shadow-xl shadow-blue-600/30 hover:shadow-blue-500/40 transform hover:-translate-y-1">
                    <!-- Icon -->
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"></path>
                    </svg>
                    Buat Laporan
                </button>
                <button
                    class="border border-slate-700 text-slate-300 text-lg px-8 py-5 rounded-lg hover:bg-slate-800 hover:text-slate-100 hover:border-slate-600 transition-colors duration-200 transform hover:-translate-y-1">
                    Lihat Status Laporan
                </button>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 px-4 bg-slate-900">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Cara Kerja Platform</h2>
                <p class="text-slate-400 text-lg">Proses sederhana untuk menyampaikan aspirasi Anda</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="text-center p-8 bg-slate-800 rounded-xl border border-slate-700">
                    <div
                        class="w-16 h-16 bg-blue-900/50 ring-8 ring-blue-900/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">1. Buat Laporan</h3>
                    <p class="text-slate-400 text-base">Tulis laporan Anda dengan detail yang jelas. Sertakan foto atau
                        dokumen pendukung jika diperlukan.</p>
                </div>
                <!-- Card 2 -->
                <div class="text-center p-8 bg-slate-800 rounded-xl border border-slate-700">
                    <div
                        class="w-16 h-16 bg-green-900/50 ring-8 ring-green-900/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">2. Proses Verifikasi</h3>
                    <p class="text-slate-400 text-base">Tim kami akan memverifikasi dan meneruskan laporan Anda ke
                        instansi terkait dalam 1x24 jam.</p>
                </div>
                <!-- Card 3 -->
                <div class="text-center p-8 bg-slate-800 rounded-xl border border-slate-700">
                    <div
                        class="w-16 h-16 bg-yellow-900/50 ring-8 ring-yellow-900/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-white">3. Tindak Lanjut</h3>
                    <p class="text-slate-400 text-base">Pantau perkembangan laporan Anda dan dapatkan update langsung
                        melalui platform ini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-800 bg-slate-900 py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="grid md:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-white">CEPUin App</span>
                    </div>
                    <p class="text-slate-400 text-sm">
                        Platform resmi untuk menyampaikan aspirasi dan keluhan masyarakat kepada pemerintah.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-200 mb-4">Layanan</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Buat Laporan</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Cek Status</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Riwayat Laporan</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-200 mb-4">Bantuan</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Panduan Penggunaan</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Kontak Support</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-slate-200 mb-4">Kontak</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="mailto:info@pengaduan.go.id"
                                class="hover:text-blue-400 transition-colors">info@pengaduan.go.id</a></li>
                        <li><a href="tel:0211234567" class="hover:text-blue-400 transition-colors">(021) 123-4567</a></li>
                        <li><a href="https://wa.me/6281234567890"
                                class="hover:text-blue-400 transition-colors">0812-3456-7890</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-10 pt-8 text-center text-sm text-slate-500">
                <p>&copy; 2024 CEPUin App. Semua hak dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>

@endsection
