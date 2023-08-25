<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class super_adminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::beginTransaction();
        try {
            //table User
            $user = User::create([
                // 'name' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'superadmin'
            ]);
            //table SuperAdmin
            SuperAdmin::create([
                'nama' => 'Super Admin',
                'jenis_kelamin' => 'Laki-laki',
                'no_hp' => '081234567890',
                'foto' => 'default.png',
                'nik' => '1234567890',
                'foto_ktp' => 'default.png',
                'user_id' => $user->id,
                'status' => 'aktif',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2000-01-01',
                'alamat' => 'Jl. Raya Cikarang',
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        // //table User


        // $user = User::create([
        //     'name' => 'Super Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin123'),
        //     'role' => 'superadmin'
        // ]);
        // //table SuperAdmin
        // SuperAdmin::create([
        //     'jenis_kelamin' => 'Laki-laki',
        //     'alamat' => 'Jl. Raya Cikarang',
        //     'no_hp' => '081234567890',
        //     'foto' => 'default.png',
        //     'ktp' => 'default.png',
        //     'user_id' => $user->id,
        //     'status' => 'aktif',
        //     'tempat_lahir' => 'Jakarta',
        //     'tanggal_lahir' => '2000-01-01',
        //     'ktp' => 'default.png'
        // ]);
    }
}
