<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    use HasFactory;

    protected $table = 'komoditas';

    protected $fillable = [
        'name',
        'petani_id',
        'kategori',
        'stok',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
