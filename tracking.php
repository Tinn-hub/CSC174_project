<?php
$servername = "";
$username = "";
$password = "";
$database = "";

if(isset($_POST['submit'])){
    $tracking = $_POST['tracking'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select fname,lname,Address,phone,packageWeight,receiverName,receiverAddress,region from CUSTOMER AS C NATURAL JOIN SHIPPING AS S NATURAL JOIN LOCATION as L where L.trackingNum = '$tracking'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " Name: " . $row["fname"]. " " . $row["lname"]. "<br>" 
    . " Address: " . $row["Address"]. "<br>" 
    ." phone: " . $row["phone"]. "<br>"
    ."To". "<br>"
    ." Name: " . $row["receiverName"]."<br>" 
    . " Address: " . $row["receiverAddress"]." " . $row["region"]. "<br>"
    ."package Weight: " .$row["packageWeight"] ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>