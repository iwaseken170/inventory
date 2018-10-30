<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;


class LoginController extends Controller{

    use AuthenticatesUsers;

    protected $email = 'email';
    protected $redirectTo = '/home';
    protected $guard = 'web';

    protected function hasTooManyLoginAttempts(Request $request){

        $maxLoginAttempts = 3;

        $lockoutTime = 1; // In minutes

        return $this->limiter()->tooManyAttempts(
            $this->throttleKey($request), $maxLoginAttempts, $lockoutTime
        );
    }

    public function getError(){

        return view('errors.404');
    }

    public function getLogin(){

        if(Auth::guard('web')->check()){
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function getRegister(){

        if(Auth::guard('web')->check()){
            return redirect()->route('home');
        }
        return view('auth.register');
    }

    public function postSignUp(Request $request){

        $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|min:4',
            'name' => 'required|min:4'
        ]);

        $email = $request['email'];
        $password = bcrypt($request['password']);
        $name = $request['name'];


        $inputUser['username'] = Input::get('username');
        $inputEmail['email'] = Input::get('email');

        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->name = $name;

        $user->save();
        return redirect()->route('getLogin');
        //Auth::login($user);
        //return redirect()->route('home');
    }

    public function postLogin(Request $request){

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            $errors = new MessageBag(['Too many Login attempts. Access denied for 60 seconds']);
            return redirect()->back()->withErrors($errors);
        }
        $remember_me = $request->has('remember_token') ? true : false;

        $auth = Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password],$remember_me);
        if ($auth) {
            return redirect()->route('index')->withMessage($message);;
        } else {
            $this->incrementLoginAttempts($request);
            $errors = new MessageBag(['password' => ['Invalid Username/Password.']]);
            return redirect()->back()->withErrors($errors);
        }
    }

    public function getLogout(){
        Auth::guard('web')->logout();
        return redirect()->route('getLogin');
    }


}
