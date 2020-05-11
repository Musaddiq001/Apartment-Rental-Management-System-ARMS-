<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Available Apartments</h1>&nbsp
	<a href="{{route('admin.index')}}">back</a> |
	<a href="{{route('logout')}}">Logout</a>  <br> <br>

	<form method="get" action="{{ route('search') }}">
	@csrf
		Search houses By Area : 

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Area" title="Type Operator Name">

		</form>

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
			<th>ACTION</th>
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
				<a href="{{route('admin.delete', $user['houseid'])}}">View</a> |
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
    td = tr[i].getElementsByTagName("td")[5];
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