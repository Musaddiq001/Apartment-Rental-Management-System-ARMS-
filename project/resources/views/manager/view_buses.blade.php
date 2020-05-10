<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Bus List and managers details</h1>&nbsp
	<a href="{{route('manager.managerindex')}}">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>OPERATOR</th>
			<th>MANAGER</th>
			<th>NAME</th>
			<th>lOCATION</th>
			<th>SEAT ROW</th>
			<th>SEAT COLUMN</th>
			<th>ACTION</th>
		</tr>
		
		@foreach($buses as $user)
		<tr>
			<td>{{$user['userId']}}</td>
			<td>{{$user['operator']}}</td>
			<td>{{$user['manager']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['location']}}</td>
			<td>{{$user['seatRow']}}</td>
			<td>{{$user['seatColumn']}}</td>
			<td>
				<a href="{{route('home.delete', $user['userId'])}}">Delete</a> |
				<a href="{{route('home.edit1', $user['userId'])}}">Edit</a> 
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>