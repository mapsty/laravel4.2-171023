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

	public function showWelcome()
	{
		return View::make('hello');
	}
        
        public function index()
        {
		$results = DB::select('select * from user00 where fw_id = ?', array(1));
        	return View::make('home')
            		#->with('title', '首頁')
			->with('title', $results)
           		->with('hello', '大家好～～');
        }

}
