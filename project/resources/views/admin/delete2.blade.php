<!DOCTYPE HTML>
<html>

<head>
  <title>House Providers details and delete</title>
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
          <h2>Details and Delete Account</h2>
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
	  
	  <div id="site_content">
		<div id="content">

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
		
		</div>
    </div>
</body>
</html>