<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor portal login</title>
    <link rel="stylesheet" href=""/>
  </head>
  <body>
    <div>
    <nav>
      <a href=".php">Home</a>
    </nav>
  </div>
 <div>
  <form action="doclog.php" method="post">

    licenseno:<input type="number"name="licenseno"Placeholder="Numerals"required></br>
    <br/>
    Password:<input type="password"name="password"Placeholder="Password"required></br>

    <button type="submit" class="btn" name="login">Login</button>
    <button type="RESET">RESET</button>
   </form>
</div>
  </body>