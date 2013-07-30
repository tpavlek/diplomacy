<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	public function index()
	{
		$updates = Update::where('id', '>', 0)->orderBy('created_at', "desc")->get();
		return View::make('index', array('updates' => $updates));
	}
	public function showWelcome()
	{
		return View::make('hello');
	}

}
