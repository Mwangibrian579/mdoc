<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW DOCTOR REGISTRATION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <a href="Admin.php">Home</a>
        </nav>
        <form action="newdoction.php" method="post">
            <div class="form-group">
                <label for="names">Names:</label><br>
                <input type="text" name="names" class="form-control" placeholder="Enter names" required>
            </div>
            <div class="form-group">
                <label for="profession">Profession:</label><br>
                <input type="radio" id="generalDoctor" name="profession" value="general doctor" class="form-check-input">
                    <label for="generalDoctor" class="form-check-label">General Doctor</label><br>
                    <input type="radio" id="optician" name="profession" value="optician" class="form-check-input">
                    <label for="optician" class="form-check-label">Optician</label><br>
                    <input type="radio" id="pediatrician" name="profession" value="pediatrician" class="form-check-input">
                    <label for="pediatrician" class="form-check-label">Pediatrician</label><br>
                    <input type="radio" id="dentist" name="profession" value="dentist" class="form-check-input">
                    <label for="dentist" class="form-check-label">Dentist</label><br>
                    <input type="radio" id="gynaecologist" name="profession" value="gynaecologist" class="form-check-input">
                    <label for="gynaecologist" class="form-check-label">Gynaecologist</label>
            </div>
            <div class="form-group">
                <label for="licenseno">License No:</label><br>
                <input type="number" name="licenseno" class="form-control" placeholder="Enter license number" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <label>Gender:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="signup">SIGN UP</button>
            <button type="reset" class="btn btn-secondary">RESET</button>
        </form>
    </div>
</body>
</html>
