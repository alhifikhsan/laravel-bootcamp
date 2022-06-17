<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Peserta extends Model
{
    use HasFactory;
        protected $fillable = [
            'nama', 'tgllahir', 'alamat', 'asalsekolah'
        ];
}
