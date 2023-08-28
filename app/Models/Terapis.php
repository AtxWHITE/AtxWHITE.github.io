<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terapis extends Model
{
    use HasFactory;
    protected $table = 'terapis';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_hp',
        'foto',
        'nik',
        'foto_ktp',
        'status',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'user_id',
        'id_layanan',
    ];
    // relasi user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // relasi layanan
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }
}
