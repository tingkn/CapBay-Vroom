<!DOCTYPE html>
<html>
<head>
    <title>Test Drive Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="register">
    <div class="container">
        <h1>Test Drive Registration</h1>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
            
            <label for="preferred_date">Preferred Date:</label>
            <input type="date" id="preferred_date" name="preferred_date" required>
            
            <label for="preferred_time">Preferred Time:</label>
            <input type="time" id="preferred_time" name="preferred_time" required>
            
            <button type="submit">Submit</button>
            <a class="back-link" href="/">Not Now</a>
        </form>
    </div>
</body>
</html>
