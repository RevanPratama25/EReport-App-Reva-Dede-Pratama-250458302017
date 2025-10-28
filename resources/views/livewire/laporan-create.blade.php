@section('title', 'Home')

<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 px-6 py-4">
            <h2 class="text-xl font-semibold text-white">Buat Laporan Baru</h2>
            <p class="text-blue-100 text-sm">Laporkan masalah, keluhan, atau saran Anda di sini</p>
        </div>

        <!-- Body -->
        <div class="p-6">
            @if (session()->has('success'))
                <div class="bg-green-50 text-green-700 border border-green-200 p-3 mb-4 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="store" enctype="multipart/form-data" class="space-y-6">
                <!-- Foto -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Foto Laporan</label>
                    <div class="flex items-center gap-4">
                        <input type="file" wire:model="foto" class="block w-full text-sm text-gray-600 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                        {{-- @if ($foto)
                            <img src="{{ $foto->temporaryUrl() }}" class="h-16 w-16 object-cover rounded-md shadow-sm">
                        @endif --}}
                    </div>
                    @error('foto')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Judul -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Judul Laporan</label>
                    <input type="text" wire:model="judul"
                        class="block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Contoh: Jalan rusak di depan kantor desa">
                    @error('judul')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Detail -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Detail Laporan</label>
                    <textarea wire:model="detail" rows="4"
                        class="block w-full px-3 py-2 text-gray-700 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Jelaskan detail masalah yang Anda laporkan..."></textarea>
                    @error('detail')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Button -->
                <div class="text-right">
                    <button type="submit"
                        class="inline-flex items-center bg-blue-600 text-white font-medium px-6 py-2.5 rounded-md shadow hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 4v16h16V4H4zm8 11l5-5m0 0l-5-5m5 5H8"></path>
                        </svg>
                        Kirim Laporan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
