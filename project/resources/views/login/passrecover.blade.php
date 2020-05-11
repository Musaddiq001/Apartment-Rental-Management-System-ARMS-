<!DOCTYPE html>
<html>

<head>
	<title>Password recovery</title>
</head>

<body>
	<a href="/">Home</a>
	<form method="post" >
        @csrf
		
        Password recovery<br>
		Username: <input type="text" name="username" value="{{old('username')}}" required><br>
		Security Qustion: What is your Phone Number?<br>
		Answer: <input type="text" name="phone" value="{{old('phone')}}" required><br>
        New password: <input type="password" name="password" required><br>
        Confirm New password: <input type="password" name="cpassword" required><br>
		<input type="submit" name="" value="Submit">
    </form>
</form>

	<h3>{{session('msg')}}</h3>

	<a href="/login">sign in</a>
</body>

</html> 