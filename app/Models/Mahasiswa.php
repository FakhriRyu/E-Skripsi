<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'NPM' ,'judul'];

    protected static function boot()
    {
        parent::boot();
    
        static::deleting(function ($bimbingan) {
            // Assuming you have a relationship method in the Bimbingan model
            $bimbingan->pembimbings()->delete();
        });
    }
    public function bimbingans()
    {
        return $this->hasMany(Bimbingan::class);
    }

    public function pembimbings()
    {
        return $this->hasMany(Pembimbing::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'NPM');
    }
}


