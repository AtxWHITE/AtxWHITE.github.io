<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $I = 0;
        for ($i = 0; $i < 10; $i++) {
            $I++;
            $user = User::create([
                // 'name' => 'customer' . $I,
                'email' => 'customer' . $I . '@gmail.com',
                'password' => bcrypt('customer' . $I),
                'role' => 'customer',
                'email_verified_at' => now(),
            ]);
            Customers::create([
                'nama' => 'customer' . $I,
                'jenis_kelamin' => 'L',
                'no_hp' => '081234567' . $I,
                'foto' => 'default.jpg',
                'nik' => '123456789' . $I,
                'foto_ktp' => 'default.png',
                'status' => 'aktif',
                'tanggal_lahir' => '1999-01-01',
                'tempat_lahir' => 'tempat_lahir' . $I,
                'alamat' => 'alamat' . $I,
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::commit();
    }
}
