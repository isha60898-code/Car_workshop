<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoFix Workshop - Car Repair & Service</title>
    <style>
        /* Same CSS as before for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #008080;
        }
        header {
            background-color: #5b8f46ff;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .hero {
            background-image: url('https://via.placeholder.com/1200x400?text=Car+Workshop+Image');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .services {
            padding: 20px;
            text-align: center;
        }
        .service-item {
            background-color: white;
            margin: 10px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: inline-block;
            width: 80%;
            max-width: 300px;
        }
        footer {
            background-color: #5b8f46ff;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .booking-form {
            background-color: white;
            padding: 20px;
            margin: 20px auto;
            max-width: 500px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <header>
        <h1>AutoFix Workshop</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contact</a>
            <a href="book.php">Book Now</a> <!-- Link to booking page -->
        </nav>
    </header>
    
    <section id="home" class="hero">
        <h2>Welcome to AutoFix Workshop</h2>
        <p>Your trusted partner for car repairs, maintenance, and more.</p>
    </section>
    
    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-item">
            <h3>Oil Change</h3>
            <p>Quick and efficient oil changes.</p>
        </div>
        <div class="service-item">
            <h3>Brake Repair</h3>
            <p>Expert brake inspections and repairs.</p>
        </div>
        <div class="service-item">
            <h3>Tire Services</h3>
            <p>From rotations to replacements.</p>
        </div>
    </section>
    
    <section id="about">
        <h2>About Us</h2>
        <p>AutoFix Workshop has been serving the community for over 10 years.</p>
    </section>
    
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: info@autofixworkshop.com | Phone: (123) 456-7890</p>
        <p>Address: 123 Main Street, City, State, ZIP</p>
    </section>
    
    <!-- Simple Booking Form on the same page for demo -->
    <section class="booking-form">
        <h2>Book an Appointment</h2>
        <form action="process_booking.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="service">Service Needed:</label>
            <select id="service" name="service" required>
                <option value="">Select a service</option>
                <option value="Oil Change">Oil Change</option>
                <option value="Brake Repair">Brake Repair</option>
                <option value="Tire Services">Tire Services</option>
            </select><br><br>
            
            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required><br><br>
            
            <input type="submit" value="Submit Booking"><br><br>

        </form>
    </section>
    <br><br>
    <footer>
        <p>&copy; 2023 AutoFix Workshop. All rights reserved.</p>
    </footer>
</body>
</html>