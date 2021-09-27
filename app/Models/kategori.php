<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    public function transaksi(){
        return $this->hasMany(Kategori::class);
    }

    public function subkategori(){
        return $this->belongsTo(Kategori::class);
    }

}
