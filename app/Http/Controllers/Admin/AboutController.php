<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    //
    
    public function show() {
		
		if(view()->exists('default.about')) {	
		
$page = DB::select("SELECT `name`,`text` FROm `pages` WHERE `alias` = :alias",['alias'=>'about']);
			return view('default.about')->withPage($page[0])->withTitle('About our company');			
			
		}
		abort(404);
	}
    
}
