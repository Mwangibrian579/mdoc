<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new medical tips</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href=""> <!-- Your custom CSS file -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
    </nav>

    <div class="container mt-5">
        <form name="medical tips" action="connectionmedtips.php" method="post" >
            <div class="form-group">
                <label for="healthaspect">Healthaspect:</label>
                <input type="text" class="form-control" id="healthaspect" name="healthaspect" placeholder="healthaspect" required>
            </div>
            <div class="form-group">
                <label for="advice">Advice:</label>
                <input type="text" class="form-control" id="advice" name="advice" placeholder="advice" required>
            </div>
            <div class="form-group">
                <label for="benefits">Benefits:</label>
                <input type="text" class="form-control" id="benefits" name="benefits" placeholder="benefits" required>
            </div>
            <button type="submit" class="btn btn-primary" name="signup">Save tip</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
