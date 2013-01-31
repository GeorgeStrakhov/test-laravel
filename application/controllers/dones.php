<?php

class Dones_Controller extends Base_Controller {

	public $restful = true;

	public function post_newdone() //array with subject and body
	{
		$newdonesubject = Input::get('donesubject');
		$useremail = Input::get('useremail');
		if(!$newdonesubject) {
			return "ERROR: done not passed";
		}
		if(!$useremail) {
			return "ERROR: useremail not passed";
		}		
		$theuser = User::where('email', '=', $useremail)->first();
		if(!$theuser) { //there is no user with this username yet - create one.
			$newusername = explode('@', $useremail)[0];
			$user = new User();
			$user->name = $newusername;
			$user->email = $useremail;
			$user->created_at = date('Y-m-d H:m:s');
			$user->updated_at = date('Y-m-d H:m:s');
			$user->save();
			//now send a welcome email
			$response = Mandrill::request('/messages/send', array(
			    'message' => array(
			        'html' => '<p>Your HaveDoneList is ready and your first done is there. You can access it <a href="http://havedonelist.com/users/'.$newusername.'">here.</p><p>When you do more awesome things, don\'t forget to send them to done@havedonelist.com and we will put them to your Have Done List.</p><p>Have fun!</p>',
			        'subject' => 'Your Have Done List is ready!',
			        'from_email' => 'havedonelist@gmail.com',
			        'to' => array(array('email'=>$useremail)),
			    ),
			));
		}
		$theuser = User::where('email', '=', $useremail)->first();
		if($theuser) { //user already exists
			$done = new Done();
			$done->subject = $newdonesubject;
			$done->user_id = $theuser->id;
			$done->created_at = date('Y-m-d H:m:s');
			$done->updated_at = date('Y-m-d H:m:s');
			$done->save();
			return Redirect::to('users/'.$theuser->name, 200);
		} else {
			return "something went wrong...";
		}
	}

}