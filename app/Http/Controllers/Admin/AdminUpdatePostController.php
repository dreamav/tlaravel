<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Auth;

class AdminUpdatePostController extends Controller
{
    //show Form
    public function show(Request $request, $id) {

    	$article = Article::find($id);
		return view('default.update_post',['title' => 'Редактирование материала','article' => $article]);
	}
	
	//new post
    public function create(Request $request) {
    	
    	$this->validate($request,[
    		'name'=>'required'
    	]);
    	
    	$user = Auth::user();

        $data = $request->except('_token');

        $article = Article::find($data['id']);

        $article->name = $data['name'];
        $article->img = $data['img'];
        $article->text = $data['text'];

        $res = $user->articles()->save($article);

        return redirect()->back()->with('message', 'Материал обновлен');


    }
}
