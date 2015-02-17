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

    public function __construct(Guard $auth, Registrar $registrar) {
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
	}

    public function getRegister() {
        return view('admin.register');
    }

    public function getLogin() {
        return view('admin.login');
    }
}