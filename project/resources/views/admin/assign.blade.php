<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Assign Manager</h1>&nbsp
	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{(('logout'))}}">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>Division</td>
				<td><input type="text" name="division" value="{{$division}}"></td>
			</tr>
			<tr>
				<td>Area</td>
				<td><input type="text" name="area" value="{{$area}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>