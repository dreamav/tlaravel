<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Article;
use App\User;
use App\Country;
use App\Role;

class Core extends Controller
{

    protected static $articles;
    
    
    public function __construct() {
		//$this->middleware('mymiddle');
	}
	
	public static function addArticles($array) {
		return self::$articles[] = $array;
	}
    
    //list materials
    public function getArticles(Request $request) {
		
		
		/*$country = Country::find(1);
		$user = User::find(2);
		
		$country->user()->associate($user);
		$country->save();*/
		
		/*$articles = Article::all();
		$user = User::find(2);
		
		foreach($articles as $article) {
			$article->user()->associate($user);
			$article->save();
		}*/
		
		
		/*$user = User::find(2);
		$role_id = Role::find(2)->id;
		
		//$user->roles()->attach($role_id);
		$user->roles()->detach($role_id);
		*/
		
		
		//$article = Article::find(24);
		
		//$article->name = 'Some text';
		
		//echo $article->name;
		
		$article = Article::find(24);
		
		//$arr = ['key'=>'hello world'];
		
		//$article->text = $arr;
		
		//$article->save();
		
		dump((string)$article);
		
		
		return ;
		
	}
	
	 //material
    public function getArticle($id) {
		
		echo 'Ответ - '.$id;
	}
}
