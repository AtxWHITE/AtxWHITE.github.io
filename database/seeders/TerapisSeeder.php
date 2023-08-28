<?php

namespace Database\Seeders;

use App\Models\Terapis;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TerapisSeeder extends Seeder
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
                'email' => 'terapis' . $I . '@gmail.com',
                'password' => bcrypt('terapis' . $I),
                'role' => 'terapis',
                'email_verified_at' => now(),
            ]);
            Terapis::create([
                'nama' => 'terapis' . $I,
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
                'id_layanan' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                //layanan_id
            ]);
            DB::commit();
        }
    }
}
