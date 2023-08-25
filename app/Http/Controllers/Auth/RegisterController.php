<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customers;
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
    protected $redirectTo = '/login';
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
        User::create([
            'role' => 'customer',
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        //customers = model customers
        $customers = Customers::create([
            'nama' => $data['name'],
            'jenis_kelamin' => 'Laki-laki',
            'no_hp' => '08123456789',
            'alamat' => 'Jl. Jalan',
            'foto' => 'default.png',
            'nik' => '1234567890123456',
            'foto_ktp' => 'default.png',
            'user_id' => User::latest()->first()->id,
            'status' => 'aktif',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2000-01-01',
        ]);
        return redirect()->route('login')->with('success', 'Register Berhasil');
    }
}
