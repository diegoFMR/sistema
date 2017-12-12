<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $user = User::where('email', $request->email)->first();
            if ($user->role_id() === 1) {
                return redirect()->route('super/admin/dashboard');
            }
            else if($user->role_id() === 2){
                return redirect()->route('root/admin/dashboard');
            }   
            else if($user->role_id() === 3){
                return redirect()->route('admin/dashboard');
            }
            else if($user->role_id() === 4){
                return redirect()->route('llantero/dashboard');
            }
            else if($user->role_id() === 5){
                return redirect()->route('bodega/dashboard');
            }
            else {
                return redirect()->route('/');
            }
        }
        else {
            return $this->sendFailedLoginResponse($request);
        }

        //return redirect()->back();
    }
}
