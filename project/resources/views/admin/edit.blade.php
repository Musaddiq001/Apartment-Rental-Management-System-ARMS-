<!DOCTYPE HTML>
<html>

<head>
  <title>Edit Profile</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="{{asset('website/style/style.css')}}" />
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
		<h1>Welcome to Apartment Rental Management System!</h1>
          <h2>Edit Profile</h2>
        </div>
      </div>&nbsp
<div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="{{route('admin.index')}}">back</a></li>  
          <li class="selected"><a href="{{route('admin.list')}}">Managers</a></li>
		  <li class="selected"><a href="{{route('admin.list1')}}">Customers</a></li>
		  <li class="selected"><a href="{{route('admin.list2')}}">House Owners</a></li>
		  <li class="selected"><a href="{{route('admin.list3')}}">Available Houses</a></li>
		  <li class="selected"><a href="{{route('admin.list4')}}">Rented Houses</a></li>
		  <li class="selected"><a href="{{route('admin.add')}}">Create New Manager Account</a> </li>
		  <li class="selected"><a href="{{route('admin.edit')}}">Edit Profile</a></li>
		  <li class="selected"><a href="{{route('logout')}}"> Logout</a> </li>
		  
        </ul>
      </div>
		<form method="post" action="{{ route('admin.update', ['username' => $user->username])}}">
		@csrf
		
		<div id="site_content">
		
		<div id="content">
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
			
			</div>
			<div id="sidebar">
    
  <h3 style="color: red;">@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach </h3>
	</div>
    </div>
		</form>
		</body>

</body>
</html>