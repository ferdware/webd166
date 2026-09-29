<?php
// Show errors if any.
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Init message variable.
$msg = '';

// Get and trim values from the form.
$fname = trim($_POST['first_name'] ?? '');
$lname = trim($_POST['last_name'] ?? '');
$email = trim($_POST['email'] ?? '');

// Capitalize names.
$fname = ucwords($fname, " -'");
$lname = ucwords($lname, " -'");

// Escape the cleaned values before displaying them in HTML.
$safe_fname = htmlspecialchars($fname, ENT_QUOTES, 'UTF-8');
$safe_lname = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

// Format the donation amount to two decimal places.
$donation = $_POST['donation'] ?? 0;
$donation = number_format((float) $donation, 2);

// Create a random 4-digit number.
$rand = random_int(1000, 9999);

// Get first letter of last name and convert to uppercase.
$last_initial = strtoupper(substr($lname, 0, 1));

// Count number of characters in last name.
$length = strlen($lname);

// Combine values to create confirmation number.
$conf = $length . $last_initial . $rand;

// Create confirmation message.
$msg = "<p>Thank you $safe_fname $safe_lname for your donation of \$$donation.</p>\n";

// Append second sentence to message.
$msg .= "        <p>Your confirmation number is $conf. We will email your receipt to $safe_email.</p>\n";
?>
<!DOCTYPE html>
<!-- Student Name: Ferdinand Eugenio -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donation Confirmation</title>

    <style>
        body {
            font-family: arial;
            font-size: 100%;
        }

        #outer {
            width: 960px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid #a8a8a8;
            box-shadow: 0px 0px 20px #a8a8a8;
            background-color: aliceblue;
        }

        h1,
        h2 {
            font-size: 1.5em;
            color: navy;
            text-align: center;
        }

        .info {
            text-align: left;
        }

        input {
            display: block;
            margin-bottom: 25px;
        }

        input[type=submit] {
            margin-top: 25px;
        }
    </style>

</head>

<body>
    <header>
        <h1>Humane Society Donations</h1>
        <h2>Help the Animals</h2>
    </header>

    <section id="outer">
        <h1 class="info">Your Contribution</h1>

        <?php echo $msg; ?>

    </section>

</body>

</html>