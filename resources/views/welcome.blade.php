<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <!-- Add your CSS stylesheets or include a CSS file -->
</head>
<body>
    <h1>Welcome to CapBay Auto Sdn. Bhd.</h1>
    <p>Please select your user type:</p>
    
    <a href="{{ route('register.index') }}">Customer</a>
    <a href="{{ route('reglist.index') }}">Sales Agent</a>
</body>
</html>
