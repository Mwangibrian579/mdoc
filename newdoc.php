<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NEW DOCTOR REGISTRATION</title>
    <link rel="stylesheet" href=""/>
  </head>
  <body>
    <div>
    <nav>
      <a href="Admin.php">Home</a>
    </nav>
  </div>
 <div>
  <form action="newdoction.php" method="post">
    Names :<input type="text"name="names"placeholder="names"required></br>
    <br/>
    Profession :<input type ="text"name="profession"placeholder="profession"required></br>
    <br/>
    licenseno:<input type="number"name="licenseno"Placeholder="Numerals"required></br>
    <br/>
    Password:<input type="password"name="password"Placeholder="Password"required></br>
    Gender:<br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">MALE</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">FEMALE</label><br>
    <button type="submit" class="btn" name="signup">SIGN UP</button>
    <button type="RESET">RESET</button>
   </form>
</div>
  </body>
</html>
