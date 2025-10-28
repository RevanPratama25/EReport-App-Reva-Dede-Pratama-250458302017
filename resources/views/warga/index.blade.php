@extends('layouts.app')

@section('title', 'Home')
@section('content')
<header class="border-b bg-white/50 backdrop-blur-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900">CEPUin App</h1>
                    <p class="text-sm text-gray-500">Suara Anda, Perubahan Nyata</p>
                </div>
            </div>

            <div class="flex items-center">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="text-gray-100 hover:text-red-600 px-3 py-2 rounded-md font-medium text-sm transition-colors duration-200 bg-red-500">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md font-medium text-sm transition-colors duration-200">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>

    <!-- Hero Section -->
    <section class="py-20 px-4">
      <div class="container mx-auto text-center max-w-4xl">
        <span class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded mb-6 text-sm">Platform Resmi Pemerintah</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          Suara Anda Penting untuk <span class="text-blue-600">Perubahan</span>
        </h1>
        <p class="text-xl text-gray-500 mb-8 max-w-2xl mx-auto">
          Laporkan masalah, keluhan, atau saran Anda kepada pemerintah. Bersama-sama kita wujudkan pelayanan publik
          yang lebih baik.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button class="bg-blue-600 text-white text-lg px-8 py-6 rounded-md flex items-center justify-center hover:bg-blue-700">
            <!-- Icon -->
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"></path>
            </svg>
            <a href=#form>
              Buat Laporan

            </a>
          </button>
          <button class="border border-gray-300 text-gray-700 text-lg px-8 py-6 rounded-md hover:bg-gray-100">
            <a href="">
              Lihat Status Laporan
            </a>
          </button>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 px-4 bg-gray-100">
      <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold mb-4">Cara Kerja Platform</h2>
          <p class="text-gray-500 text-lg">Proses sederhana untuk menyampaikan aspirasi Anda</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div class="text-center p-6 bg-white rounded-lg shadow">
            <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"></path>
              </svg>
            </div>
            <h3 class="text-lg font-bold mb-2">1. Buat Laporan</h3>
            <p class="text-gray-500 text-base">Tulis laporan Anda dengan detail yang jelas. Sertakan foto atau dokumen pendukung jika diperlukan.</p>
          </div>
          <!-- Card 2 -->
          <div class="text-center p-6 bg-white rounded-lg shadow">
            <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 8v4l3 3"></path>
              </svg>
            </div>
            <h3 class="text-lg font-bold mb-2">2. Proses Verifikasi</h3>
            <p class="text-gray-500 text-base">Tim kami akan memverifikasi dan meneruskan laporan Anda ke instansi terkait dalam 1x24 jam.</p>
          </div>
          <!-- Card 3 -->
          <div class="text-center p-6 bg-white rounded-lg shadow">
            <div class="w-16 h-16 bg-yellow-50 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <h3 class="text-lg font-bold mb-2">3. Tindak Lanjut</h3>
            <p class="text-gray-500 text-base">Pantau perkembangan laporan Anda dan dapatkan update langsung melalui platform ini.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="form" class="py-16 px-4 bg-blue-100">
      @livewire('laporan-create')
    </section>

    <hr>

    <section id="form" class="py-16 px-4 bg-blue-100">
      @livewire('list-laporan')
    </section>

    <!-- Footer -->
    <footer class="border-t bg-gray-100 py-12 px-4">
      <div class="container mx-auto max-w-6xl">
        <div class="grid md:grid-cols-4 gap-8">
          <div>
            <div class="flex items-center gap-3 mb-4">
              <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v10z"></path>
                </svg>
              </div>
              <span class="font-bold">CEPUin App</span>
            </div>
            <p class="text-gray-500 text-sm">
              Platform resmi untuk menyampaikan aspirasi dan keluhan masyarakat kepada pemerintah.
            </p>
          </div>
          <div>
            <h4 class="font-semibold mb-4">Layanan</h4>
            <ul class="space-y-2 text-sm text-gray-500">
              <li>Buat Laporan</li>
              <li>Cek Status</li>
              <li>Riwayat Laporan</li>
              <li>FAQ</li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold mb-4">Bantuan</h4>
            <ul class="space-y-2 text-sm text-gray-500">
              <li>Panduan Penggunaan</li>
              <li>Kontak Support</li>
              <li>Kebijakan Privasi</li>
              <li>Syarat & Ketentuan</li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold mb-4">Kontak</h4>
            <ul class="space-y-2 text-sm text-gray-500">
              <li>Email: info@pengaduan.go.id</li>
              <li>Telepon: (021) 123-4567</li>
              <li>WhatsApp: 0812-3456-7890</li>
            </ul>
          </div>
        </div>
        <div class="border-t mt-8 pt-8 text-center text-sm text-gray-500">
          <p>&copy; 2024 CEPUin App. Semua hak dilindungi undang-undang.</p>
        </div>
      </div>
    </footer>
@endsection

{{-- buatkan ini jadi ui landing page untuk project Pengaduan Masyarakat yang di dalamnya hanya terdapat 2 tabel db dengan nama users dan laporan --}}