<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machakos County General Hospital</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styling for the navbar */
        .navbar {
            background-color: #007bff; /* Blue background color */
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff; /* White text color */
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Lighter text color on hover */
        }

        /* Background image */

    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light">
     <a class="navbar-brand" href="index.php">Home</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link" href="First Aid.php">First aid</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="Appointmentbook.php">Book appointment</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contacts.php">Contact us</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contacts.php">Chat with us</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contacts.php">Need help finding a specialist?</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="contacts.php">Emergency</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="appointread.php">Booked appointments Information</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="logout.php">Logout</a>
         </li>
       </ul>
     </div>
   </nav> 
   <div class="container mt-4">
       <p>Welcome to Machakos County General Hospital! We aim at providing quality health. We offer a wide range of services and feel free to choose any of our services through this page or by visiting our healthcare facilities. Your health is our concern.</p>
      </div>
      <div>
        <p>Daily medical tips
        <?php include 'dailytip.php'; ?>
        <?php include 'appointment_reminder.php'; ?>
        <?php include 'medicine_reminder.php'; ?>
        </p>
      </div>
   <!-- Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
