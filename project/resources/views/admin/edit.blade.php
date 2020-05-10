<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Edit Staff</h1>&nbsp
	<a href="{{route('home.list1')}}">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="{{$userId}}"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="{{$username}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="uname" value="{{$email}}"></td>
			</tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$password}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{$type}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>