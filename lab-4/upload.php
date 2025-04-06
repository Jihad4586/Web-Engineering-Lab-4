<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$database = "lab4";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$fav_color = $_POST['favourite-color'];


$sql = "INSERT INTO registration (first_name, last_name, age, phone, gender, email, favourite_color)
        VALUES ('$first_name', '$last_name', $age, '$phone', '$gender', '$email', '$fav_color')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
