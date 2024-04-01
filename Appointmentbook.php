<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Replace "styles.css" with your custom CSS file -->
</head>
<body>
    <div>
        <nav>
            <a href="patloginhome.php" class="btn btn-primary">Home</a>
            <a href="patlogin.php" class="btn btn-primary">Already have an account?</a>
        </nav>
    </div>
    <div class="container">
        <h2>Book Appointment</h2>
        <form action="Appoint.php" method="post">
            <div class="form-group">
                <label for="appointment">Doctor Category:</label><br>
                <div class="form-check">
                    <input type="radio" id="generalDoctor" name="appointment" value="general doctor James Billy" class="form-check-input">
                    <label for="generalDoctor" class="form-check-label">General Doctor-James Billy</label><br>
                    <input type="radio" id="generalDoctor" name="appointment" value="general doctor Simon Hawkins" class="form-check-input">
                    <label for="generalDoctor" class="form-check-label">General Doctor-Simon Hawkins</label><br>
                    <input type="radio" id="optician" name="appointment" value="optician Mary Mwai" class="form-check-input">
                    <label for="optician" class="form-check-label">Optician-Mary Mwai</label><br>
                    <input type="radio" id="optician" name="appointment" value="optician Joseph Mwaniki" class="form-check-input">
                    <label for="optician" class="form-check-label">Optician-Joseph Mwaniki</label><br>
                    <input type="radio" id="pediatrician" name="appointment" value="pediatrician Vincent Watende" class="form-check-input">
                    <label for="pediatrician" class="form-check-label">Pediatrician-Vincent Watende</label><br>
                    <input type="radio" id="pediatrician" name="appointment" value="pediatrician Soapstone Villeys" class="form-check-input">
                    <label for="pediatrician" class="form-check-label">Pediatrician-Soapstone Villeys</label><br>
                    <input type="radio" id="dentist" name="appointment" value="dentist Mike Johnson" class="form-check-input">
                    <label for="dentist" class="form-check-label">Dentist-Mike Johnson</label><br>
                    <input type="radio" id="dentist" name="appointment" value="dentist Michael Hillstone" class="form-check-input">
                    <label for="dentist" class="form-check-label">Dentist-Michael Hillstone</label><br>
                    <input type="radio" id="gynaecologist" name="appointment" value="gynaecologist William Tikab" class="form-check-input">
                    <label for="gynaecologist" class="form-check-label">Gynaecologist-William Tikab</label><br>
                    <input type="radio" id="gynaecologist" name="appointment" value="gynaecologist Hilbert Hinga" class="form-check-input">
                    <label for="gynaecologist" class="form-check-label">Gynaecologist-Hilbert Hinga</label>
                </div>
            </div>
            <div class="form-group">
                <label for="dateofappointment">Appointment Date:</label>
                <input type="date" name="dateofappointment" class="form-control" required>
            </div>
           <!-- <div class="form-check">
                    <input type="radio" id="Approved" name="approval" value="Approved" class="form-check-input"hidden>
                    <label for="Approved" class="form-check-label"hidden>Approved</label><br>
                    <input type="radio" id="Disapproved" name="approval" value="Disapproved" class="form-check-input"hidden>
                    <label for="Disapproved" class="form-check-label"hidden>Disapproved</label><br>
                </div>
                <div class="form-group">
                <label for="approvalstatuscomment"hidden>Status Comment:</label><br>
                <input type="text" name="approvalstatuscomment" class="form-control" placeholder="approvalstatuscomment" hidden>-->
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Book Appointment</button>
            <button type="reset" class="btn btn-secondary">Reset</button> 
        </form>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    // Get the current date
    var today = new Date().toISOString().split('T')[0];
    // Set the min attribute of the date input field to today
    document.getElementById("dateofappointment").setAttribute("min", today);

    // Log the current date to check if the script is executed
    console.log("Today's date:", today);
</script>

</body>
</html>