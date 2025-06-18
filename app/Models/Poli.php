<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'polis';

    protected $fillable = ['nama', 'deskripsi'];

    // Relationship dengan dokter
    public function dokterss()
    {
        return $this->hasMany(User::class, 'id_poli')->where('role', 'dokter');
    }
}
