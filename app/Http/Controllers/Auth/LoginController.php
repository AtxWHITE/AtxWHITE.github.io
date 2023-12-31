<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Middleware\CheckUserRole;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; //ini yang diubah

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        switch ($user->role) {
            case 'superadmin':
                return redirect('/superadmin/dashboard');
            case 'admin':
                return redirect('/admin/dashboard');
            case 'finance':
                return redirect('/finance/dashboard');
            case 'customer':
                return redirect('/');
            case 'terapi':
                return redirect('/terapi/dashboard');
            default:
                return redirect('/');
        }
    }
}
