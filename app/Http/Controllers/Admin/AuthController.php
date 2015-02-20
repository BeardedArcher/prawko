<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * Opis pliku
 *
 * @author: Janusz Smoła
 */

class AuthController extends Controller {

    use AuthenticatesAndRegistersUsers;

    public $loginPath = '/admin/logowanie';
    public $redirectTo = '/admin/';

    public function __construct(Guard $auth, Registrar $registrar) {
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
		$this->middleware('auth.basic');
	}

    public function getRegister() {
        if(env('APP_ENV', 'production') == 'local') {
            return view('admin.register');
        } else {
            $this->redirectTo($this->loginPath());
        }
    }

    public function getLogin() {
        return view('admin.login');
    }
}