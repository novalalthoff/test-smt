<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Library
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
  use HasFactory, SoftDeletes;

  // Nama tabel
  protected $table = 'mahasiswa';
  protected $guarded = ['id'];

  public function jurusan()
  {
    return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
  }
}
