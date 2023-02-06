<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Library
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
  use HasFactory, SoftDeletes;

  // Nama tabel
  protected $table = 'jurusan';
  protected $guarded = ['id'];
}
