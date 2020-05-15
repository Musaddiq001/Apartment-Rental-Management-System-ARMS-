<!DOCTYPE HTML>
<html>

<head>
  <title>Managers</title>
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
          <h2>Area managers</h2>
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
@csrf
	<div id="site_content">
      <div class="sidebar">
		Quick Search : 

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Area" title="Type Operator Name">
</div>
		
		<form method="get" action="{{ route('search') }}">
	
	Search Manager By name: <input type="search" name="search" >
		<input type="submit" name="submit" value="Search" ><br> <br>
		</form>
		
		<div id="content">

		<table id="myTable" border="1">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Phone</th>
			<th>TYPE</th>
			<th>Address</th>
			<th>National ID</th>
			<th>Division</th>
			<th>Area</th>
			<th>Action</th>
		</tr>
		
		@foreach($managers as $user)
		<tr>
			<td>{{$user['fname']}}</td>
			<td>{{$user['lname']}}</td>
			<td>{{$user['username']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['phone']}}</td>
			<td>{{$user['type']}}</td>
			<td>{{$user['address']}}</td>
			<td>{{$user['nid']}}</td>
			<td>{{$user['division']}}</td>
			<td>{{$user['area']}}</td>
			<td>
				<a href="{{route('admin.assign', $user['userId'])}}">Assign/Change Area</a> |
				<a href="{{route('admin.delete', $user['userId'])}}">Delete Account</a> |
			</td>
		</tr>
		@endforeach
	</table>
	</div>
    </div>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[9];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
