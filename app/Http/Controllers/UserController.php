<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\Verification;
use Carbon\Carbon;

class UserController extends Controller
{
    public static function addUser(Request $request)
    {
    	return User::create(array_merge($request->except('password'), ['password' => Hash::make($request->password), 'role'=>'prospect'] ));
    }

    public function verifyEmail(Request $request)
    {
    	$verified = Verification::where('verification_code', $request->code)
    							->where('user_id', $request->id)
    							->first();
    	if ($verified) {
    		$user = User::find($verified->user_id);
    		$user->email_verified_at = Carbon::now();
    		$user->save();

    		session()->flash('email_verified', true);
    		return redirect()->route('login');
    	}

    	// session()->flash('invalid_link', true);
    	return redirect('/');
    }

    public function loginFrm()
    {
    	return view('auth.login');
    }

    public function login(Request $request)
    {
    	$this->validator($request);

    	if (auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            if (!auth()->user()->email_verified_at) {
                session()->flash('error', 'Please verify your email before you can login.');
                auth()->logout();

                return redirect()->route('login');
            }
            return redirect()->route('dashboard');
        }

        session()->flash('error','Invalid credentials');
        return back()->withInput($request->only('email', 'remember'));
    }

    public function validator(Request $request)
    {
        $rules = [
            'email'         => 'required|email',
            'password'      => 'required|min:5',
        ];

        return $this->validate($request, $rules);
    }

    public function profile()
    {
    	$user = auth()->user();
    	$name = $user->f_name.' '.$user->l_name;

    	return view('dash.profile',compact('name', 'user'));
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
