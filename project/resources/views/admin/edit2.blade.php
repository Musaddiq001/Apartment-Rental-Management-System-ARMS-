<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Edit Bus Details</h1>&nbsp
	<a href="{{route('home.list2')}}">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" readonly name="id" value="{{$userId}}"></td>
			</tr>
			<tr>
				<td>Operator</td>
				<td><input type="text" name="operator" value="{{$operator}}"></td>
			</tr>
			<tr>
				<td>Manager</td>
				<td><input type="text" name="manager" value="{{$manager}}"></td>
			</tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="{{$location}}"></td>
			</tr>
			<tr>
				<td>Seat Row</td>
				<td><input type="text" name="seat_row" value="{{$seat_row}}"></td>
			</tr>
			<tr>
				<td>Seat Column</td>
				<td><input type="text" name="seat_column" value="{{$seat_column}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>