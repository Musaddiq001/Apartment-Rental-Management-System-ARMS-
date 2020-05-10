<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Bus Counters List</h1>&nbsp
	<a href="{{route('home.index')}}">back</a> |
	<a href="/logout">Logout</a> | <br><br> 

	<form method="get" action="{{ route('searchCounter') }}">
	@csrf
	Search Bus Counters: <input type="search" name="search" >
		<input type="submit" name="submit" value="Search" ><br> <br> 
		Search Bus counters By ID : 

		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by name" title="Type Name">

		</form>




	<table id="myTable" border="1">
		<tr>
			<th>ID</th>
			<th>OPERATOR</th>
			<th>MANAGER</th>
			<th>NAME</th>
			<th>lOCATION</th>
			<th>ACTION</th>
		</tr>
		
		@foreach($buscounters as $user)
		<tr>
			<td>{{$user['userId']}}</td>
			<td>{{$user['operator']}}</td>
			<td>{{$user['manager']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['location']}}</td>
			<td>
				<a href="{{route('home.delete1', $user['userId'])}}">Delete</a> |
				<a href="{{route('home.edit1', $user['userId'])}}">Edit</a> 
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
    td = tr[i].getElementsByTagName("td")[3];
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