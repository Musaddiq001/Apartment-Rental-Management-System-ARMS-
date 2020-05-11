<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Edit Profile</h1>&nbsp
	<a href="{{route('admin.index')}}">Back</a> |
	<a href="{{route('logout')}}">Logout</a> <br>
		<form method="post" action="{{ route('admin.update', ['username' => $user->username])}}">
		@csrf
			<table class="table">
				<tbody>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" value="{{$user->fname}}" required></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value="{{$user->lname}}" required></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" value="{{$user->username}}" readonly></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="{{$user->email}}" required></td>
					</tr>
					<tr>
						<td>phone: </td>
						<td><input type="text" name="phone" value="{{$user->phone}}" required></td>
					</tr>
					<tr>
						<td>Address: </td>
						<td><input type="text" name="address" value="{{$user->address}}" required></td>
					</tr>
					<tr>
						<td>National ID: </td>
						<td><input type="text" name="nid" value="{{$user->nid}}" required></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" value="{{$user->password}}" required></td>
					</tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type="password" name="cpassword" value="" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="update"></td>
					</tr>
				</tbody>
			</table>
		</form>
		@foreach($errors->all() as $error)
		{{$error}} <br>
	    @endforeach
		</body>
</html>