<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function soal()
    {
        // todo relasi dengan soal (konsep satu ke banyak)
        return $this->hasMany(Soal::class);
    }
}
