<?php

class Welcome_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return View::make('welcome.index')
			->with('users', User::all())
			->with('title', 'HAVE DONE LIST');
	}

}