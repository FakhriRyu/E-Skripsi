<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'NPM', 'Judul'];

    public function user()
    {
        return $this->hasOne(User::class, 'username', 'NPM');
    }
}


