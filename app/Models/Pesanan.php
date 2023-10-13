<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'pedagang_id',
        'petani_id',
        'komoditas_id',
        'stok',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
