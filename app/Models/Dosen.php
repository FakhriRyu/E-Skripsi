<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'NIP','NomorNIP'];

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'NIP');
    }
    public function bimbingans()
    {
        return $this->hasMany(Bimbingan::class, 'dosen_id');
    }
}
