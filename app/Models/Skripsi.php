<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id','dosen1_id','dosen2_id','judul'];

    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class);
    }
}
