<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Workshop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to [Mechanic Workshop]</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#login">Login</a></li>
                <li><a href="#register">Register</a></li>
                <li><a href="#status">Monitor Status</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Your Trusted Mechanic Workshop</h2>
        <p>We provide top-notch repair services for your vehicle.</p>
        <img src="https://via.placeholder.com/800x400" alt="Mechanic Workshop">
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <ul>
            <li>Oil Change</li>
            <li>Tire Replacement</li>
            <li>Engine Repair</li>
            <li>Brake Service</li>
        </ul>
    </section>

    <section id="login">
        <h2>Login</h2>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </section>

    <section id="register">
        <h2>Create an Account</h2>
        <form>
            <label for="new-username">Username:</label>
            <input type="text" id="new-username" name="new-username" required>
            <label for="new-password">Password:</label>
            <input type="password" id="new-password" name="new-password" required>
            <button type="submit">Register</button>
        </form>
    </section>

    <section id="status">
        <h2>Monitor Repair Status</h2>
        <form>
            <label for="service-id">Service ID:</label>
            <input type="text" id="service-id" name="service-id" required>
            <button type="submit">Check Status</button>
        </form>
        <div id="status-result"></div>
    </section>

    <footer>
        <p>&copy; 2025 [Mechanic Workshop]. All rights reserved.</p>
    </footer>
</body>
</html>
