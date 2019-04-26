<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }

    public function show(Request $request){
        $user = Auth::user();

        if (!Auth::check()) {
        	$user = User::find(1);
        	// Auth::login($user);
        	// Auth::guard('web')->login($user);

        	Auth::guard('web')->logout();
        	Auth::loginUsingId(1);



        	// return redirect('/login');
        }
        if (Auth::viaRemember()) {
        	echo 'yes';
        }

        // $user = $request->user();
        dump(Auth::id());
        return view('welcome');
    }
}
