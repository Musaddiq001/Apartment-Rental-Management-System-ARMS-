<!DOCTYPE HTML>
<html>

<head>
  <title>Admin Home Page</title>
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
          <h2>Admin Home Page</h2>
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
	  <div id="site_content">
	  
	  <div id="footer">
      </div>
	  
	  </div>
	</form>

	
	
      </div>
    </div>

</body>
</html>