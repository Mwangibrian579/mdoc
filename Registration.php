<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CREATE YOUR PATIENT ACCOUNT WITH US TODAY.</title>
    <link rel="stylesheet" href="reg.css"/>
    <script type="text/javascript">
      function checkPasswordMatch() {
        var password = document.forms["myForm"]["password"].value;
        var confirmPassword = document.forms["myForm"]["confirmpassword"].value;
        if (password != confirmPassword) {
          alert("Passwords do not match.");
          return false;
        }
        return true;
      }
    </script>
  </head>
  <body>
    <div>
    <nav>
      <a href="index.php">Home</a>
      <a href="patlogin.php">Already have an account?</a>
    </nav>
  </div>
 <div>
  <form action="connection.php" method="post">
    Surname:<input type="text"name ="surname"placeholder="surname"required></br>
   </br>
    other names :<input type="text"name="othernames"placeholder="othernames"required></br>
    <br/>
    phone no.:<input type ="number"name="phoneno"placeholder="Numerals"required></br>
    <br/>
    Email:<input type="email"name="email"Placeholder="Optional"required></br>
    <br/>
    Residence:<input type="text"name="residence"placeholder="residence"required></br>
    Gender:<br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">MALE</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">FEMALE</label><br>
    Password:<input type ="password"name="password"placeholder="password"required></br>
    <br/>
    Confirm your password:<input type="password"name="confirmpassword"placeholder="Identical with password"required></br>
    <button type="submit" class="btn" name="signup">SIGN UP</button>
    <button type="RESET">RESET</button>
   </form>
</div>
  </body>
</html>
