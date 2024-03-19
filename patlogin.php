<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient login</title>
    <link rel="stylesheet" href="pat.css"/>
</head>
<body>
    <div class="navbar">
        <nav>
            <a href="Index.php">Home</a>
            <a href="First Aid.php">First aid</a>
            <a href="Registration.php">New patient Registration</a>
            <a href="Contact.php">Contact us</a>
        </nav>
    </div>
    <h2>Login Page</h2>
    <div class="container">
        <form action="logincon.php" method="post">
            <div class="form-group">
                <label for="surname">Surname:</label><br>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn" name="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
