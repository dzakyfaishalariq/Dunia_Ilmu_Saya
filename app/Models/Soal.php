<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        // todo relasi dengan user (konsep banyak ke satu)
        return $this->belongsTo(User::class);
    }
    public function kategori()
    {
        // todo relasi dengan kategori (konsep banyak ke satu)
        return $this->belongsTo(Kategori::class);
    }
    public function bidang()
    {
        // todo relasi dengan bidang (konsep banyak ke satu)
        return $this->belongsTo(Bidang::class);
    }
    public function jenis_soal()
    {
        // todo relasi dengan user (konsep banyak ke satu)
        return $this->belongsTo(Jenis_soal::class);
    }
}
