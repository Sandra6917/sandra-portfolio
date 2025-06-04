<?php
$email = $_POST['cemail'];
$name = $_POST['cname'];
$message = $_POST['cmessage'];
 
$conn = new mysqli('localhost', 'root', '', 'contactdetail');

$sql = "INSERT INTO contacts (Name, Email, projectdetails) VALUES ('$name', '$email', '$message')";

$conn->query($sql);

echo "Saved Successully";