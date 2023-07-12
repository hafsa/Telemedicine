<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Superadmin;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:superadmin')->except('logout');
        $this->middleware('guest:doctor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login', ['url' => route('login'), 'title'=>'User login']);
    }

    public function showDoctorLoginForm()
    {
        return view('auth.login', ['url' => route('doctor.login-view'), 'title'=>'Doctor login']);
    }

    public function doctorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('doctor')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/doctor/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        $this->guard('doctor')->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/doctor/login');
    }

    public function showsuperadminLoginForm()
    {
        return view('auth.login', ['url' => route('superadmin.login-view'), 'title'=>'Super Admin login']);
    }

    public function superadminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (\Auth::guard('superadmin')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/superadmin/dashboard');
        }
        
        return back()->withInput($request->only('email', 'remember'));
    }

    public function superadminlogout(Request $request)
    {
        $this->guard('superadmin')->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/superadmin/login');
    }
}
