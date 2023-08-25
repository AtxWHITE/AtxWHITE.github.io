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
        //jika data role = customers
        if ($data['role'] == 'customer') {
            User::create([
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);
            //customers = model customers
            $customers = new Customers();
            $customers->nama = $data['name'];
            $customers->jenis_kelamin = $data['jenis_kelamin'];
            $customers->status = $data['status'];
            $customers->no_hp = $data['no_hp'];
            $customers->alamat = $data['alamat'];
            $customers->nik = $data['nik_ktp'];
            $customers->user_id = User::latest()->first()->id;
            $customers->status =  $data['status'];
            $customers->tempat_lahir = $data['tempat_lahir'];
            $customers->tanggal_lahir = $data['tanggal_lahir'];

            if ($data['foto']) {
                $data['foto']->move(storage_path('app/public/foto'), $data['foto']->getClientOriginalName());
                $customers->foto = $data['foto']->getClientOriginalName();
            };
            if ($data['ktp']) {
                $data['ktp']->move(storage_path('app/public/ktp'), $data['ktp']->getClientOriginalName());
                $customers->foto_ktp = $data['ktp']->getClientOriginalName();
            }
            $customers->save();
        }
        return redirect('/')->with('success', 'Berhasil Mendaftar, Silahkan verifikasi email anda');
    }
}
