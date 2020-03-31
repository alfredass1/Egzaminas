<?php

namespace App\Http\Controllers;
use App\User;
use Gate;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $accounts = Account::all();
      return view('bank.pages.home', compact('accounts'));
    }

    public function atsijungti()
    {
        Auth::logout();

        return redirect('/login');
    }
}
