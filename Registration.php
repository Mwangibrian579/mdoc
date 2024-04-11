<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Patient Account with Us Today</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href=""> <!-- Your custom CSS file -->
    <script>
    function checkPasswordMatch() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        
        console.log("Password: ", password);
        console.log("Confirm Password: ", confirmPassword);

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <a class="navbar-brand" href="patlogin.php">Already have an account?</a>
        </div>
    </nav>

    <div class="container mt-5">
        <form name="registration" action="connection.php" method="post" onsubmit="return checkPasswordMatch(); showRegistrationSuccessPopup()">
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
            </div>
            <div class="form-group">
                <label for="othernames">Other Names:</label>
                <input type="text" class="form-control" id="othernames" name="othernames" placeholder="Other Names" required>
            </div>
            <div class="form-group">
    <label for="phoneno">Phone Number:</label>
    <input type="tel" class="form-control" id="phoneno" name="phoneno" placeholder="Phone Number" required pattern="[0-9]{10}">
    <small class="form-text text-muted">Please enter a 10-digit phone number.</small>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email (Optional)">
            </div>
            <div class="form-group">
                <label for="residence">Residence:</label>
                <input type="text" class="form-control" id="residence" name="residence" placeholder="Residence" required>
            </div>
            <div class="form-group">
                <label>Gender:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="Male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="Female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
