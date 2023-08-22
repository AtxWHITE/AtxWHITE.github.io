<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //alamat
            'alamat' => ['required', 'string', 'max:255'],
            //jenis kelamin
            'jenis_kelamin' => ['required', 'string', 'max:255'],
            //no hp
            'no_hp' => ['required', 'string', 'max:255'],
            //foto
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // nik_ktp
            'nik_ktp' => ['required', 'string', 'max:255'],
            //ktp
            'ktp' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // 'ktp' => ['required', 'string', 'max:255'],
            //tempat lahir
            'tempat_lahir' => ['required', 'string', 'max:255'],
            //tanggal lahir
            'tanggal_lahir' => ['required', 'string', 'max:255'],
            //status
            'status' => ['required', 'string', 'max:255'],
            // is_admin
            'is_admin' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // db:transaksion 
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'alamat' => $data['alamat'],
            'password' => Hash::make($data['password']),
            'is_admin' => $data['is_admin'],
        ]);
        // if data foto 
        if (isset($data['foto'])) {
            $data['foto']->move(storage_path('app/public/foto'), $data['foto']->getClientOriginalName());
            $data['foto'] = $data['foto']->getClientOriginalName();
        } else {
            $data['foto'] = 'default.png';
        }
        if (isset($data['ktp'])) {
            $data['ktp']->move(storage_path('app/public/foto'), $data['ktp']->getClientOriginalName());
            $data['ktp'] = $data['ktp']->getClientOriginalName();
        } else {
            $data['ktp'] = 'default.png';
        }

        Profil::create([
            'nama_lengkap' => $data['name'],
            'alamat' => $data['alamat'],
            'user_id' => $user->id,
            'jenis_kelamin' => $data['jenis_kelamin'],
            'no_hp' =>  $data['no_hp'],
            'foto' => $data['foto'],
            'nik_ktp' => $data['nik_ktp'],
            'ktp' => $data['ktp'],
            'status' => $data['status'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
        ]);
        // jika is_admin =2 
        return $user;
    }
}
