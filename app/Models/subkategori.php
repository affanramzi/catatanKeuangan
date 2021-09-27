<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkategori extends Model
{
    use HasFactory;

    public function kategori(){
        return $this->hasMany(subkategori::class);
    }

}
