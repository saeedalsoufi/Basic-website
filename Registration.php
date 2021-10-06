<!--
Title: w3schools.com "mysqli with prepared statements"
Author: W3Schools.com 
Date: 2020
Availability: https://www.w3schools.com/php/php_mysql_prepared_statements.asp

Comment: This is the php code for the registration page. First lines collect the data from html form, the other lines post the data from the client into the database in a safe way using prepare statment.
-->
<?php
 $Username = $_POST['Username'];
 $Password = $_POST['Password'];
 $firstName = $_POST['firstName']; 
 $lastName  = $_POST['lastName'];
 $email = $_POST['email'];
 $number = $_POST['number'];

// Create connection
$conn = new mysqli('fareham.city.ac.uk', 'adbd860', '190014080', 'adbd860');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO Registration (Username, Password, firstName, lastName, email, number) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $Username, $Password, $firstName, $lastName, $email, $number);

$stmt->execute();
echo"registered";
$stmt->close();
$conn->close();
    
?>