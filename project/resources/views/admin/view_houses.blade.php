<!DOCTYPE HTML>
<html>

<head>
  <title>Apartments</title>
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
          <h2>Apartments</h2>
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
	
	Quick Search: 

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID" title="Type Operator Name">

		</div>
		
		<form method="get" action="{{ route('searchHouses') }}">
     	Search Apartments by area: <input type="search" name="search" >
		<input type="submit" name="submit" value="Search" ><br> <br>
	
		

		<table id="myTable" border="1">
		<tr>
			<th>House ID</th>
			<th>House Name</th>
			<th>House Owner</th>
			<th>Interested Customer</th>
			<th>Division</th>
			<th>Area</th>
			<th>Address</th>
			<th>Size</th>
			<th>No of bed</th>
			<th>Rent</th>
			<th>Description</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		
		@foreach($houseinfos as $user)
		<tr>
			<td>{{$user['houseid']}}</td>
			<td>{{$user['housename']}}</td>
			<td>{{$user['houseowner']}}</td>
			<td>{{$user['interestedcustomer']}}</td>
			<td>{{$user['division']}}</td>
			<td>{{$user['area']}}</td>
			<td>{{$user['address']}}</td>
			<td>{{$user['size']}}</td>
			<td>{{$user['noofbed']}}</td>
			<td>{{$user['rent']}}</td>
			<td>{{$user['description']}}</td>
			<td>{{$user['status']}}</td>
			<td>
				<a href="{{route('admin.details', $user['houseid'])}}">View Details</a>
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
    td = tr[i].getElementsByTagName("td")[0];
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