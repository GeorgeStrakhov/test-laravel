@layout('layouts.default')

@section('content')
	<div style="text-align: left;">
		<ul>
			@foreach($dones as $done)
				<li>{{$done->subject}}</li>
			@endforeach
		</ul>
		<hr/>
		<form action="http://hdl/api/newdone" method="post">
			Submit new done:&nbsp;
			<input type="text" name="donesubject" />
			<input type="text" name="useremail" value="{{$useremail}}">
			<input type="submit" />
		</form>
	</div>
@endsection