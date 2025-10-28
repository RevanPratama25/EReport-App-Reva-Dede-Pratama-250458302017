<?php

namespace App\Livewire;

use App\Models\LaporanPengaduan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Livewire\Component;
use Livewire\WithFileUploads;

class LaporanCreate extends Component
{
    use WithFileUploads;
    // ini untuk bisa upload foto dari lokal
    // pastikan untuk 
    
    public $judul  = "";

    public $detail = "";

    public $foto   ;

    public function store(){
        $this->validate([
            'judul'  => 'required',
            'detail' => 'required',
            'foto'   => ['required','image','max:2048'],
            
        ]);

        $fotopath = $this->foto->store( 
            'laporan_foto', 'public'
        );

        LaporanPengaduan::create([
            'judul' => $this->judul,
            'detail' => $this->detail,
            'foto'=> $fotopath,
            'tanggal'=> Date::now(),
            'pelapor_id'=> Auth::user()->id,
        ]);

        session()->flash('success', 'laporan berhasil dibuat !');

    }
       
    public function render()
    {
        return view('livewire.laporan-create')->extends('layouts.app');
    }
}
