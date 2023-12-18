<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'pembimbing_id','mahasiswa_id','bagian', 'file_skripsi','waktu1','dosen_id', 'file_revisi', 'status', 'waktu2'];

    protected $rules = [
        'file_revisi' => 'file|mimes:pdf,doc,docx', // Sesuaikan ini dengan kebutuhan
    ];
    
    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class);
    }
    
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }
    
    public function dosen1()
    {
        return $this->belongsTo(Dosen::class, 'dosen1_id');
    }
    
    public function dosen2()
    {
        return $this->belongsTo(Dosen::class, 'dosen2_id');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
