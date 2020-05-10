<!DOCTYPE html>
<html>
<head>
	<title>Counter Details page</title>
</head>
<body>	

	<h1>Counter Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table>
			<tr>
				<td>Id</td>
				<td>{{$userId}}</td>
			</tr>
			<tr>
				<td>OPERATOR</td>
				<td>{{$operator}}</td>
			</tr>
			<tr>
				<td>MANAGER</td>
				<td>{{$manager}}</td>
			</tr>
			
			<tr>
				<td>NAME</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>LOCATION</td>
				<td>{{$location}}</td>
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