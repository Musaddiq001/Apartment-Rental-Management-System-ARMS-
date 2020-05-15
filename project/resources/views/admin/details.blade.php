<!DOCTYPE HTML>
<html>

<head>
  <title>Apartment Details</title>
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
          <h2>Apartment Details</h2>
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
				<td>{{$houseid}}</td>
			</tr>
			<tr>
				<td>Apartment Name</td>
				<td>{{$housename}}</td>
			</tr>
			
			<tr>
				<td>Owners Name</td>
				<td>{{$houseowner}}</td>
			</tr>
			
			<tr>
				<td>Interested Customer</td>
				<td>{{$interestedcustomer}}</td>
			</tr>
			<tr>
				<td>Division</td>
				<td>{{$division}}</td>
			</tr>
			<tr>
				<td>Area</td>
				<td>{{$area}}</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>{{$address}}</td>
			</tr>
			<tr>
				<td>Size</td>
				<td>{{$size}}</td>
			</tr>
			<tr>
				<td>No Of Bed</td>
				<td>{{$noofbed}}</td>
			</tr>
			<tr>
				<td>Rent</td>
				<td>{{$rent}}</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>{{$description}}</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>{{$status}}</td>
			</tr>	
			
		</table>
		
		</div>
    </div>
</body>
</html>