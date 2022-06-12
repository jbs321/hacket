<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $users = User::all();
        return view('auth.login', compact('users'));
    }

    public function tryLogin(Request $request)
    {
        $sql = "SELECT id, name, email, password  from users where email = '" . $request->email . "' and password = '" . $request->password . "'";

        $result = DB::select($sql);


        return new JsonResponse($result);
    }
}
