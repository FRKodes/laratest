<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
</head>
<body>
	<h1>All Users</h1>

	@if($users->count())

		@foreach ($users as $user)
			<li>{{ link_to("/users/{$user->username}",$user->username) }}</li>
		@endforeach

	@else
		There is nothing man... sorry
	@endif

</body>
</html>