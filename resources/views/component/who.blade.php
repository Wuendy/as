@if(Auth::guard('web')->check())
	<p>You are logged in as a user</p>
@else
<p>You are logged out as a user</p>
@endif
@if(Auth::guard('admin')->check())
<p>You are logged in as a admin</p>	@else
<p>You are logged out as a admin</p>
@endif