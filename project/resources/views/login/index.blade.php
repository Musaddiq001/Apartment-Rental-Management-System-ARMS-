<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome to Bus ticket Reseravation system</h1>
	<h2>Sign in</h2>
	<form method="post" >
		@csrf
<!-- 		{{csrf_field()}} -->		
<!-- 		<input type="hidden" name="_token" value="{{csrf_token()}}"> -->

        Usertype:
				<select name="usertype">
				<option value="Admin">Admin</option>
				<option value="Manager">Manager</option>
				<option value="House Owner">House Owner</option>
				<option value="Customer">Customer</option>
				
				</select> <br>
        
		Email:  <input type="text" name="uname" > <br>
		Password: <input type="password" name="password" ><br>
		<input type="submit" name="submit" value="login" ><br> <br>
		
		<a href="{{route('signup.index')}}">Do not have an account? Please Sign up!</a> | 
	</form>

	<h3>{{session('msg')}}</h3>
</body>
</html>