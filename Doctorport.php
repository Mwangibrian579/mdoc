<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Portal Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 400px;
            padding: 20px;
            background-color: #fff; /* White background for the form container */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        form {
            margin-bottom: 20px;
        }
        form input[type="number"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da; /* Light gray border */
            border-radius: 4px;
            box-sizing: border-box;
        }
        form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff; /* Blue button */
            border: none;
            border-radius: 4px;
            color: #fff; /* White text */
            cursor: pointer;
        }
        form button[type="RESET"] {
            background-color: #dc3545; /* Red button for reset */
            margin-top: 10px;
        }
        form button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        nav {
            margin-bottom: 20px;
        }
        nav a {
            color: #007bff; /* Blue text for navigation links */
            margin-right: 10px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
    </nav>
    <div class="container">
        <h1 class="mb-4">Doctor Portal Login</h1>
        <form action="doclog.php" method="post">
            <div class="form-group">
                <label for="licenseno">License Number:</label>
                <input type="number" name="licenseno" id="licenseno" class="form-control" placeholder="Enter License Number" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
