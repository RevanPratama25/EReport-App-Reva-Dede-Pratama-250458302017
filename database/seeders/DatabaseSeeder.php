<?php

namespace Database\Seeders;

use App\Models\LaporanPengaduan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        LaporanPengaduan::create([
            'judul' => 'jalan rusak',
            'detail' => 'jalan bolong',
            'tanggal' => Date::now(),
            'foto' => '',
            'pelapor_id' => 1,
        ]);
    }
}
