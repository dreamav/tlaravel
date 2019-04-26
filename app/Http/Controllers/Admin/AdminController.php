<?php

namespace App\Http\Controllers\Admin;

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
        	return redirect('/login');
        }
        if (Auth::viaRemember()) {
        	echo 'yes';
        }

        // $user = $request->user();
        dump($user);
        return view('welcome');
    }
}
