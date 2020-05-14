<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Rented Apartments</h1>&nbsp
	<a href="{{route('admin.index')}}">back</a> |
	<a href="{{route('logout')}}">Logout</a>  <br> <br>

	<form method="get" action="{{ route('searchRented') }}">
	@csrf
	
		Search Rented Apartments by area: <input type="search" name="search" >
		<input type="submit" name="submit" value="Search" ><br> <br>
		
		Search Rented Apartments by ID : 

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID" title="Type Operator Name">

		</form>

		<table id="myTable" border="1">
		<tr>
			<th>House ID</th>
			<th>House Owner</th>
			<th>Customer Name</th>
			<th>Area</th>
			<th>Rented Since</th>
		</tr>
		
		@foreach($rentedhouseinfo as $user)
		<tr>
			<td>{{$user['houseid']}}</td>
			<td>{{$user['houseownername']}}</td>
			<td>{{$user['customername']}}</td>
			<td>{{$user['area']}}</td>		
			<td>{{$user['date']}}</td>
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