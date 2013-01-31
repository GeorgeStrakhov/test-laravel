@layout('layouts.default')

@section('content')
	<div>
		<p>To Do Lists are humiliating, all the empty boxes at the end of the day make you feel useless, stupid and ugly.</p>
		<p>Have Done List comes to the resque. Whenever you've done something, just send an email to <a href="mailto:done@havedonelist.com">done@havedonelist.com</a> and we will keep track of all your 'dones' for you. You can go, check them out a month later (or on your death bed) and be rightly proud of yourself.</p>
		<p>Have fun!</p>
	</div>
	<hr />
	<div>
		<p>Things you need to know:</p>
		<ul>
			<li>we will send the link to your personal Have Done List after your first email</li>
			<li>we only read the subject line for now, so put your 'done' thing there</li>
		</ul>
	</div>
	<!--<ul>
		@foreach($users as $user)
			<li>{{HTML::link_to_route('user', $user->name, $user->name)}}</li>
		@endforeach
	</ul>-->
@endsection