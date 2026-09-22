<?php
// Turn on error messages while testing on localhost.
ini_set('display_errors', 1);
error_reporting(E_ALL);

// === SECTION 1: THE PHP PROCESSING BLOCK ===

// Retrieve the values from the form.
$milesDriven    = $_POST["miles_driven"];
$gallonsUsed    = $_POST["gallons_used"];
$pricePerGallon = $_POST["price_per_gallon"];

// Gallons used must be greater than 0, because we cannot divide by zero.
if ($gallonsUsed > 0) {

    // Calculate miles per gallon.
    $mpg = $milesDriven / $gallonsUsed;

} else {

    // No gallons were entered, so there is nothing to divide.
    $mpg = 0;
}

// Calculate the total cost of the trip.
$tripCost = $gallonsUsed * $pricePerGallon;
?>

<!doctype html>
<!-- Ferdinand Eugenio -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Trip Calculations</title>
    <style>
        /* Button that sends the user back to the form. */
        .new-trip input {
            margin-top: 15px;
            padding: 5px 10px;
            font-size: 14px;
            background-color: #ffffff;
            border: 2px solid #333333;
        }
    </style>
</head>
<body>

    <!-- === SECTION 2: THE HTML STRUCTURE === -->

    <h1>Trip Calculations</h1>

    <h2>Values Entered</h2>

    <p>Miles Driven: <?php echo number_format($milesDriven); ?></p>

    <p>Gallons Used: <?php echo $gallonsUsed; ?></p>

    <p>Price per Gallon: <?php echo "$" . number_format($pricePerGallon, 2); ?></p>

    <h2>Your Results</h2>

    <p>Miles Per Gallon: <?php echo number_format($mpg, 2); ?></p>

    <p>Cost of the Trip: <?php echo "$" . number_format($tripCost, 2); ?></p>

    <!-- Send the user back to the form to start over. -->
    <form class="new-trip" action="calculator.html">
        <input type="submit" value="Calculate a New Trip">
    </form>

</body>
</html>
