<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
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
   // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('login,logout');
    }

    public function custom_auth(Request $request)
    {
        $rules = array(
            'password' => 'min:6'
        );

        $post = $request->all();

        if(isset($post['logout'])){
           return $this->logout($request);
        }

        if(isset($post['authorization'])){
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            } else {
                if(Auth::attempt(['name'=>$post['username'],'password'=>$post['password']])){
                    $user_id = Auth::id();
                    Auth::loginUsingId($user_id);
                }
                return back();
            }
        }

        if(isset($post['registration'])){
            User::create([
                'name' => $post['username'],
                'password' => Hash::make($post['password']),
            ]);

            return back();
        }

    }

    public function logout($request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('index');
    }
}
