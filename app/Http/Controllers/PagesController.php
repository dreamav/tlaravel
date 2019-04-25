<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    
    public function getIndex() {
		echo __METHOD__;
	}
	
	 public function getCreate() {
		//echo __METHOD__;
		echo route('pages.create');
	}
	
	public function postIndex() {
		print_r($_POST);
	}
}
