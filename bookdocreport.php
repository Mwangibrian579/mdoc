<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Doctor Appointment Report</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav>
            <a href="Admin.php" class="btn btn-primary">Home</a>
        </nav>
    <div class="container">
        <h2>Download Doctor Appointment Report</h2>
        <form action="download_report.php" method="post">
            <div class="form-group">
                <label for="doctor">Select Doctor:</label>
                <select name="doctor" class="form-control" required>
                    <option value="general doctor James_Billy">General Doctor - James Billy</option>
                    <option value="general doctor Simon Hawkins">General Doctor - Simon Hawkins</option>
                    <option value="optician Mary Mwai">Optician - Mary Mwai</option>
                    <option value="optician Joseph Mwaniki">Optician - Joseph Mwaniki</option>
                    <option value="pediatrician Vincent Watende">Pediatrician - Vincent Watende</option>
                    <option value="pediatrician Soapstone Villeys">Pediatrician - Soapstone Villeys</option>
                    <option value="dentist Mike Johnson">Dentist - Mike Johnson</option>
                    <option value="dentist Michael Hillstone">Dentist - Michael Hillstone</option>
                    <option value="gynaecologist William Tikab">Gynaecologist - William Tikab</option>
                    <option value="gynaecologist Hilbert Hinga">Gynaecologist - Hilbert Hinga</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="download">Download Report</button>
        </form>
    </div>
</body>
</html>
