
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CREATE YOUR PATIENT ACCOUNT WITH US TODAY.</title>
    <link rel="stylesheet" href=".css"/>
  </head>
  <body>
    <div>
    <nav>
      <a href="index.php">Home</a>
      <a href="patlogin.php">Already have an account?</a>
    </nav>
  </div>
 <div>
  <form action="connectionpt.php" method="post">
    Doctor category:<br>
    <input type="radio" id="" name="appointment" value="general doctor">
    <label for="general doctor">General doctor</label><br>
    <input type="radio" id="optician" name="appointment" value="optician">
    <label for="optician">Optician</label><br>
    <input type="radio" id="pediatrician" name="appointment" value="peditrician">
    <label for="pediatrician">Pediatrician</label><br>
    <input type="radio" id="dentist" name="appointment" value="dentist">
    <label for="dentist">Dentist</label><br>
    <input type="radio" id="gynaecologist" name="appointment" value="gynaecologist">
    <label for="gynaecologist">Gynaecologist</label><br>
   </br>
    Appointment date:<input type="date"name="dateappointment"placeholder="dateappointment"required></br>
    <br/>
    <button type="submit" class="btn" name="signup">Book Appointment</button>
    <button type="RESET">RESET</button>
   </form>
</div>
  </body>
</html>
