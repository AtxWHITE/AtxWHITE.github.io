<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    // table customers
    protected $table = 'customers';

    // relasi dengan order
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
