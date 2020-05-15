<!DOCTYPE HTML>
<html>

<head>
  <title>Create Manager</title>
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
          <h2>Create new Manager Account</h2>
        </div>
      </div>&nbsp
<div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
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

	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		
		<div id="site_content">
		
		<div id="content">
		
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
		
		
      </div> 
	  <div id="sidebar">
    
  <h3 style="color: red;">@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach </h3>
	</div>
		
		</div>
    </div>
	</form>
	
	
	
	

</body>
</html>