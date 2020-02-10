<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Auth;
use Route;

class ClientLoginController extends Controller
{


	protected $redirectTo = '/login';

	public function __construct()
	{
		$this->middleware('guest:client', ['except' => ['logout']]);
	}

	public function showLoginForm()
	{
		return view('frontend.login_form');
	}

	public function login(Request $request)
	{
		// Validate the form data
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required|min:6'
		]);

		// Attempt to log the user in
		if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
		// if successful, then redirect to their intended location
			return redirect('/');
		}

		if ($this->attemptLogin($request)) {
			return $this->sendLoginResponse($request);
		}

		// if unsuccessful, then redirect back to the login with the form data
		//return redirect('/login')->withInput($request->only('email', 'remember'));
		return $this->sendFailedLoginResponse($request);
	}

	public function logout()
	{
		Auth::guard('client')->logout();
		return redirect('/login');
	}


	protected function sendFailedLoginResponse(Request $request)
	{
		throw ValidationException::withMessages([
			$this->username() => [trans('auth.failed')],
		]);
	}

	protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function authenticated(Request $request, $user)
    {
        //
    }

	protected function sendLoginResponse(Request $request)
	{
		$request->session()->regenerate();

		return $this->authenticated($request, $this->guard()->user())
		?: redirect()->intended($this->redirectPath());
	}

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
    	return 'email';
    }

    protected function guard()
    {
        return Auth::guard('client');
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
}