<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Create New Manager Account</h1>&nbsp
	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout')}}">Logout</a><br>

	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" value="{{old('fname')}}"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" value="{{old('lname')}}"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="uname" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{old('email')}}"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="{{old('phone')}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><input type="text" name="type" value="{{old('type')}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="{{old('address')}}"></td>
			</tr>
			<tr>
				<td>NID NO</td>
				<<td><input type="text" name="nid" value="{{old('nid')}}"></td>
			</tr>
			<tr>
				<td>Division</td>
				<<td><input type="text" name="division" value="{{old('division')}}"></td>
			</tr>
			<tr>
				<td>Area</td>
				<<td><input type="text" name="area" value="{{old('area')}}"></td>
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