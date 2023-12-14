<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'dosen1_id',
        'dosen2_id',
        'status',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function dosen1()
    {
        return $this->belongsTo(Dosen::class, 'dosen1_id');
    }

    public function dosen2()
    {
        return $this->belongsTo(Dosen::class, 'dosen2_id');
    }
    public function bimbingans()
    {
        return $this->hasMany(Bimbingan::class);
    }

    
}