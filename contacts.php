<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
</head>
<body>
<nav>
<a href="index.php">Homepage</a>
<a href="patlogin.php">Patient Login</a>
<a href="First Aid.php">First aid</a>
<a href="Registration.php">New patient Registration</a>
</nav>
<h1> Contact us </h1>
<h2> Are you trying to reach out to us</h2>
<p>
    If you have any questions, complaints or suggestions feel free to fill the contact form provided and we will get back to you through your email. You are also free to visit our facilities at any time. 
</p>
<form action="contactii.php" method="post">
Surname:<input type="text"name ="surname"placeholder="surname"required></br>
Email:<input type="email" name="email"placeholder="email"required></br>
Message:<input type="text" name="message"placeholder="message" required></br>

<button type="submit" class="btn" name="submit">Submit</button>
<button type="RESET">RESET</button>
</form>
    <p>You can also call our hotline  number 97654321 in case of an emergency and we will act with immediate effect</br> Our adresses and location details are as follows. </br></p>
</body>
</html>