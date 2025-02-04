<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Leap Year Checker</title>
    <style>
        .year{
            width: 10%;
        }
    </style>
</head>
<center>

    <body class="mt-5 bg-light">
        <h1>Leap Year Checker</h1><br>
        <form action="check_leap_year.php" method="POST">
            <label for="year">Enter a Year:</label><br>
            <input class="form-control year" type="number" id="year" name="year" required><br>
            <input class="btn btn-success" type="submit" value="Check Leap Year">
        </form>
</center>
</body>

</html>