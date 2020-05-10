<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>User Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table>
			<tr>
				<td>Id</td>
				<td>{{$userId}}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{{$username}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$email}}</td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td>{{$password}}</td>
			</tr>
			<tr>
				<td>Type</td>
				<td>{{$type}}</td>
			</tr>
		</table>
		


<script>
function myFunction() {
  alert("Are you sure? This can't be undone!");
}
</script>
	
		<form method="post">
			{{csrf_field()}}
			<input type="hidden" name="userId" value="{{$userId}}">
			<input type="submit" name="submit" value="Confirm" button onclick="myFunction()"></button>
		</form>
</body>
</html>