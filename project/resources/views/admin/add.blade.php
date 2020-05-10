<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Create Bus service</h1>&nbsp
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<table>
			<tr>
				<td>Operator</td>
				<td><input type="text" name="operator" value="{{old('operator')}}"></td>
			</tr>
			<tr>
				<td>Manager</td>
				<td><input type="text" name="manager" value="{{old('manager')}}"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location" value="{{old('location')}}"></td>
			</tr>
			<tr>
				<td>Seat Row</td>
				<td><input type="text" name="seatRow" value="{{old('seatRow')}}"></td>
			</tr>
			<tr>
				<td>Seat Column</td>
				<<td><input type="text" name="seatColumn" value="{{old('seatColumn')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
	</form>
	
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>