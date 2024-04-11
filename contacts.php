<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="patloginhome.php">Homepage</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Contact us</h1>
        <h2>Are you trying to reach out to us?</h2>
        <p>If you have any questions, complaints, or suggestions, feel free to fill the contact form provided, and we will get back to you through your email. You are also free to visit our facilities at any time.</p>
        
        <form action="contactii.php" method="post">
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
        
        <p>You can also call our hotline number 97654321 in case of an emergency, and we will act immediately.</p>
        <p>Our address and location details are as follows:</p>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            &copy; 2024 Brian Mwangi. All rights reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
