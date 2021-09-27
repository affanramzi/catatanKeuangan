<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class);
    }

    public function akun(){
        return $this->hasMany(Akun::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

}
