<?php
// Store the Googleplex information in variables.
$heading = "Googleplex";
$street = "1600 Amphitheatre Parkway";
$city = "Mountain View";
$state = "CA";
$country = "United States";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables - Ferdinand Eugenio</title>
</head>
<body>
    <?php
    // Display the heading and address using the variables.
    echo "    <h1>" . $heading . "</h1>\n";
    echo "    <p>The Googleplex is the corporate headquarters complex of Google and its parent company Alphabet Inc. It is located at:</p>\n";
    echo "    <p>" . $street . "<br>\n";
    echo "    " . $city . ", " . $state . ", " . $country . "</p>\n";
    ?>
</body>
</html>