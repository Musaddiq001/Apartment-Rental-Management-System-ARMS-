<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Bus managers List</h1>&nbsp
	<a href="{{route('home.index')}}">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th>TYPE</th>
			<th>ACTION</th>
		</tr>
		
		@foreach($users as $user)
		<tr>
			<td>{{$user['userId']}}</td>
			<td>{{$user['username']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['type']}}</td>
			<td>
				<a href="{{route('home.delete', $user['userId'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>