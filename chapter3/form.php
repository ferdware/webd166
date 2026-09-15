<?php
// Catch the data submitted from form.html using the POST method.

// Retrieve the name entered in the form.
$name = $_POST['name'];

// Retrieve the email address entered in the form.
$email = $_POST['email'];

// Retrieve the phone number entered in the form.
$phone = $_POST['phone'];

// Retrieve which radio button was selected for "How did you hear about us?"
$heard = $_POST['heard'];

// Retrieve the comments entered in the textarea.
$comments = $_POST['comments'];
?>
<!DOCTYPE html>
<!-- Ferdinand Eugenio-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Results - Ferdinand Eugenio</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <header>
        <h1>Form Results</h1>
    </header>

    <main>
        <h2>You submitted the below information</h2>

        <p><strong>Name:</strong> <?php print $name; ?></p>
        <p><strong>Email:</strong> <?php print $email; ?></p>
        <p><strong>Phone:</strong> <?php print $phone; ?></p>
        <p><strong>Heard about us:</strong> <?php print $heard; ?></p>
        <p><strong>Comments:</strong> <?php print $comments; ?></p>
    </main>
</body>

</html>
