<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Gate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Session;

class AdminPostController extends Controller
{
    //show Form
    public function show() {
		return view('default.add_post',['title' => 'Новый материал']);
	}
	
	//new post
    public function create(Request $request) {

        Session::remove('message');
        $article = new Article;

        /*if(Gate::denies('add', $article)){
            Session::put(['message' => 'У вас нет прав']);
            return redirect()->back();
        }*/

        if ($request->user()->cannot('add',$article)) {
            Session::put(['message' => 'У вас нет прав']);
            return redirect()->back();
        }
    	
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

        Session::put(['message' => 'Материал добавлен']);
		return redirect()->back();
       
	}
}
