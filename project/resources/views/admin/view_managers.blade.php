<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Area Managers List</h1>&nbsp
	<a href="{{route('admin.index')}}">back</a> |
	<a href="{{route('logout')}}">Logout</a> 
<form method="get" action="{{ route('search') }}">
	@csrf
		Search Managers By Area : 

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Area" title="Type Operator Name">

		</form>

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