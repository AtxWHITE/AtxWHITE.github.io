<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'super_admins';
    protected $fillable = ['jenis_kelamin', 'alamat', 'no_hp', 'foto', 'ktp', 'user_id', 'status', 'tempat_lahir', 'tanggal_lahir', 'ktp'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
