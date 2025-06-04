<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactdetail";
$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_POST['name'];
$email = $_POST['email'];
$projectdetails = $_POST['projectdetails'];
$sql="INSERT INTO contacts(name, email, project details)" VALUES('$name','$email', '$projectdetails')"

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
