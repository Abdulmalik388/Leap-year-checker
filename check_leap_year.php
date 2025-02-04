<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
    <style>
        .notaleapyear{
            color: red;
        }
        .aleapyear{
            color: green;
        }
    </style>
</head>

<body class="mt-5 bg-light">
    
<center>
<?php
function is_leap_year($year) {
    // Check if the year is divisible by 4
    if ($year % 4 == 0) {
        // Check if it's divisible by 100
        if ($year % 100 == 0) {
            // Check if it's divisible by 400
            if ($year % 400 == 0) {
                return true;
            } else {
                return false;
            }
        } 
    } }

// Check if the form has been submitted and process the input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $year = $_POST['year'];

    if (is_leap_year($year)) {
        echo "<h2 class='aleapyear'>$year is a leap year! </h2>" ;
        
    } else {
        echo "<h2 class='notaleapyear'>$year is not a leap year.</h2>";
    }

}

?><br><br><br>
<a href="index.php"><button class="btn btn-success">go home</button></a></center>
</body>
</html>