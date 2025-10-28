<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanPengaduan extends Model
{
   protected $fillable = [
      'judul',
      'detail',
      'tanggal',
      'foto',
      'pelapor_id'
   ];


   public function user(){
      return $this->belongsTo(User::class);
   }
}
