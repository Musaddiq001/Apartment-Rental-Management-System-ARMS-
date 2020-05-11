<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Customers List!</h1>&nbsp
	<a href="{{route('admin.index')}}">back</a> |
	<a href="{{route('logout')}}">Logout</a> 

	<table border="1">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone</th>
			<th>TYPE</th>
			<th>Address</th>
			<th>National ID</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		
		@foreach($customers as $user)
		<tr>
			<td>{{$user['fname']}}</td>
			<td>{{$user['lname']}}</td>
			<td>{{$user['username']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['phone']}}</td>
			<td>{{$user['type']}}</td>
			<td>{{$user['address']}}</td>
			<td>{{$user['nid']}}</td>
			<td>{{$user['status']}}</td>
			<td>
				<a href="{{route('admin.delete', $user['username'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>