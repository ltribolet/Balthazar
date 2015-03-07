<?php namespace Balthazar\Http\Controllers;

use Balthazar\Models\Account;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function index()
	{
		return view('index');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function home()
	{
		$accounts = \Balthazar\Models\User::find(Auth::user()->iduser)->accounts()->get();

		return view('home', ['accounts' => $accounts]);
	}

}
