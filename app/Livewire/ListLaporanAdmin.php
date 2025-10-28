<?php

namespace App\Livewire;

use App\Models\LaporanPengaduan;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListLaporanAdmin extends Component
{
    public function render()
    {
        $pelapor_id = Auth::user()->id;
        $data = LaporanPengaduan::where('pelapor_id', $pelapor_id)->get();
        
        return view('livewire.list-laporan-admin',compact('data'));
    }
}
