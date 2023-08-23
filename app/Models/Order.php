<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // table
    protected $table = 'orders';

    // filable
    protected $fillable = [
        'user_id',
        'mobil_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'total_harga',
        'status',
    ];
}
