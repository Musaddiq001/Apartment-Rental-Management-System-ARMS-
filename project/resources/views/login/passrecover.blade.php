<!DOCTYPE HTML>
<html>

<head>
  <title>password recover</title>
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
          <h2>Recover your password</h2>
        </div>
      </div>
	<form method="post" >
        @csrf
		<div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="{{route('login.index')}}">Back to login </a></li>
	    </ul>
      </div>
	  
	  <div id="site_content">
      <div id="content">
		
        Password recovery<br>
		Username: <input type="text" name="username" value="{{old('username')}}" required><br>
		Security Qustion: What is your Phone Number?<br>
		Answer: <input type="text" name="phone" value="{{old('phone')}}" required><br>
        New password: <input type="password" name="password" required><br>
        Confirm New password: <input type="password" name="cpassword" required><br>
		<input type="submit" name="" value="Submit">
      </div>
    </div>
      <div id="footer">
    
  <h3 style="color: red;">{{session('msg')}} </h3>
      </div> 
    </div>
  </div>
</body>
</html>