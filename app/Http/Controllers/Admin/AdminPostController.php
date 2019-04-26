<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

class AdminPostController extends Controller
{
    //show Form
    public function show() {
		return view('default.add_post',['title' => 'Новый материал']);
	}
	
	//new post
    public function create(Request $request) {
    	
    	$this->validate($request,[
    		'name'=>'required'
    	]);
    	
    	$user = Auth::user();
    	$data = $request->all();
    	
    	$res = $user->articles()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text']
        ]);
        
       
		return redirect()->back()->with('message','Материал добавлен');
       
	}
}
