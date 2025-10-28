<div class="card mb-4">
    <div class="card-body">

        {{-- Notifikasi --}}
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Table Container for Responsiveness (Bootstrap) --}}
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $laporan)
                        <tr>
                            {{-- JUDUL --}}
                            <td>
                                {{ Str::limit($laporan->judul, 30) }}
                            </td>

                            {{-- DETAIL --}}
                            <td>
                                {{ Str::limit($laporan->detail, 50) }}
                            </td>

                            {{-- STATUS (Bisa Diubah) --}}
                            <td>
                                {{-- Menyesuaikan warna badge Bootstrap berdasarkan status --}}
                                @php
                                    $badgeClass = '';
                                    if ($laporan->status == 'Selesai') {
                                        $badgeClass = 'bg-success';
                                    } elseif ($laporan->status == 'Proses') {
                                        $badgeClass = 'bg-warning text-dark';
                                    } else {
                                        $badgeClass = 'bg-danger';
                                    }
                                @endphp

                                <select
                                    wire:model="newStatus.{{ $laporan->id }}"
                                    wire:change="updateStatus({{ $laporan->id }}, $event.target.value)"
                                    class="form-select form-select-sm {{ $badgeClass }}"
                                >
                                    <option value="Baru" {{ $laporan->status == 'Baru' ? 'selected' : '' }}>Baru</option>
                                    <option value="Proses" {{ $laporan->status == 'Proses' ? 'selected' : '' }}>Proses</option>
                                    <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </td>

                            {{-- FOTO --}}
                            <td>
                                @if ($laporan->foto)
                                    <img
                                        src="{{ asset('storage/' . $laporan->foto) }}"
                                        alt="Foto Laporan"
                                        class="rounded-circle"
                                        style="width: 40px; height: 40px; object-fit: cover;"
                                    >
                                @else
                                    Tidak Ada
                                @endif
                            </td>

                            {{-- TANGGAL --}}
                            <td>
                                {{ \Carbon\Carbon::parse($laporan->tanggal)->format('d M Y') }}
                            </td>

                            {{-- AKSI --}}
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data laporan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>