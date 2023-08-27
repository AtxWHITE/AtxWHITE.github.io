<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    // table customers
    protected $table = 'customers';
    protected $fillable = ['nama', 'jenis_kelamin', 'alamat', 'no_hp', 'foto', 'ktp', 'user_id', 'status', 'tempat_lahir', 'tanggal_lahir', 'ktp'];

    // relasi dengan order
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    protected $table = 'customers';
    protected $fillable = ['nama', 'jenis_kelamin', 'alamat', 'no_hp', 'foto',  'nik', 'foto_ktp', 'user_id', 'status', 'tempat_lahir', 'tanggal_lahir'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
