<!DOCTYPE HTML>
<html>

<head>
  <title>Log in page</title>
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
          <h2>Log in</h2>
        </div>
      </div>
	  
	  <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="{{route('login.passrecover')}}">Recover Password</a></li>
        </ul>
      </div>
    </div>
	  
	  <form method="post">
		@csrf
	  
      
    <div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
	  <div id="sidebar_container">
        
        <div class="sidebar">
     
        </div>
        
      </div>
      <div id="content">
        Usertype:
				<select name="usertype">
				<option value="Admin">Admin</option>
				<option value="Manager">Manager</option>
				<option value="House Owner">House Owner</option>
				<option value="Customer">Customer</option>
				
				</select> <br> <br>
        
		Username:  <input type="text" required name="uname" > <br><br>
		Password:  <input type="password" required name="password" ><br><br>
		<input type="submit" name="submit" value="login" ><br> <br>
      </div>
    </div>
      <div id="footer">
    
  <h3 style="color: red;">{{session('msg')}} </h3>
      </div> 
    </div>
  </div>
</body>
</html>
