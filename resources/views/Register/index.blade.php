<!DOCTYPE html>
<html>
<head>
    <title>Test Drive Registration</title>
    <!-- Add your CSS stylesheets or include a CSS file -->
</head>
<body>
    <h1>Test Drive Registration</h1>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="/">Home</a>

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
    </form>
</body>
</html>
