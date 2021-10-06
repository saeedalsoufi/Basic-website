<?php
$Username = $Post["Username"];
$Password = $Post["Password"];


$Username = mysql_real_escape_string($Username);
$Username = stripcslashes($Username);
$Password = mysql_real_escape_string($Password);
$Password = stripcslashes($Password);


// Create connection
$conn = new mysqli('fareham.city.ac.uk', 'adbd860', '190014080', 'adbd860');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Username, Password FROM Registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Username"]. " " . $row["Password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();







?>