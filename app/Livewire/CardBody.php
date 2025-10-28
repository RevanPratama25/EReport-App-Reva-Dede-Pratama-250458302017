<?php

namespace App\Livewire;

use App\Models\LaporanPengaduan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Livewire\Component;

class CardBody extends Component
{
    public function render()
    {
        $datawarga = User::Where("role","=","warga")->get();
        $data = $datawarga->count();
        $datalaporanall = LaporanPengaduan::all()->count();
        $datalaporantoday = LaporanPengaduan::Where("tanggal","=",Date::today())->get()->count();
        
        //a week
        $enddate = Carbon::now();
        $startdate = Carbon::now()->subDay(6);
        $datalaporanweek = LaporanPengaduan::WhereBetween("tanggal",[$startdate, $enddate])->count();

        return view('livewire.card-body',[
                    'data' => $data,
                    'datalaporanall' => $datalaporanall,
                    'datalaporantoday' => $datalaporantoday,
                    'datalaporanweek' => $datalaporanweek,
                ]);
    }
}
