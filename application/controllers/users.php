<?php

class Users_Controller extends Base_Controller {

	public $restful = true;

	public function get_index($username)
	{
		$theuser = User::where('name', '=', $username)->first();
		if($theuser) {
			return View::make('users.index')
					->with('title', strtoupper($username).' HAS DONE:')
					->with('username', $username)
					->with('useremail', $theuser->email)
					->with('dones', Done::where('user_id', '=', $theuser->id)->get());
		} else {
			return "no such user";
		}
	}

}