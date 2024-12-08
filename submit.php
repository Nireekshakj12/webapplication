<?php
// Get form data from POST
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$address = htmlspecialchars($_POST['address']);
$gender = htmlspecialchars($_POST['gender']);

// Display the formatted result
echo "<h3>Registration Successful!</h3>";
echo "<p><strong>Name:</strong> $name</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Phone:</strong> $phone</p>";
echo "<p><strong>Address:</strong> $address</p>";
echo "<p><strong>Gender:</strong> $gender</p>";
?>


