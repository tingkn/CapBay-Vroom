<!DOCTYPE html>
<html>
<head>
    <title>CapBay Vroom - Experience the Future of Transportation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/" class="logo">CapBay Auto</a></li>
                <li><a href="{{ route('reglist.index') }}">Sales Agent Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Experience the Future of Transportation</h1>
            <h2>CapBay Vroom: AI-Powered Cars Redefining the Way We Drive</h2>
            <a href="{{ route('register.index') }}" class="btn btn-primary">Learn More</a>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <img src="images/car.jpg" alt="Car">
            <h3>Smart AI Technology</h3>
            <p>CapBay Vroom utilizes advanced artificial intelligence technology to enhance your driving experience, making every journey safer and more efficient.</p>
        </div>
        <div class="feature">
            <img src="images/sustainability.jpg" alt="Sustainability">
            <h3>Sustainable Mobility</h3>
            <p>With CapBay Vroom, you can enjoy eco-friendly transportation without compromising on performance. Our AI cars are designed with sustainability in mind.</p>
        </div>
        <div class="feature">
            <img src="images/safety.jpg" alt="Safety">
            <h3>Enhanced Safety Measures</h3>
            <p>Your safety is our top priority. CapBay Vroom comes equipped with advanced safety features and intelligent assistance to ensure a secure driving experience.</p>
        </div>
    </section>

    <section class="contact">
        <h2>Experience the Future Today!</h2>
        <p>Contact us to schedule a test drive and explore the capabilities of CapBay Vroom.</p>
        <a href="{{ route('register.index') }}" class="btn btn-secondary">Contact Us</a>
    </section>

    <footer>
        <p>&copy; 2023 CapBay Auto. All rights reserved.</p>
    </footer>
</body>
</html>
