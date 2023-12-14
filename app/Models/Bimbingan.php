<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $fillable = [ 'pembimbing_id','mahasiswa_id','bagian', 'file_skripsi','waktu1','dosen_id', 'file_revisi', 'status', 'waktu2'];

    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
