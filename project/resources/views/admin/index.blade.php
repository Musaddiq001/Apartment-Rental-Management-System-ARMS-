<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
</head>
<body>	

	<h1>Welcome to Apartment Rental Management System!</h1>&nbsp

	<a href="{{route('admin.list')}}">Managers</a> |
	<a href="{{route('admin.list1')}}"> Customers</a> |
	<a href="{{route('admin.list2')}}"> House Owners</a> <br> <br>
	<a href="{{route('admin.list3')}}"> Available Houses</a> |
	<a href="{{route('admin.list4')}}"> Rented Houses</a> <br> <br>
	<a href="{{route('admin.add')}}"> Create New Manager Account</a> |
	
	<a href="{{route('admin.edit')}}"> Edit Profile</a> |
    <a href="{{route('logout')}}"> Logout</a> 

</body>
</html>