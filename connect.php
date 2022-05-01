
<?php
$servername = "";
$username = "";
$password = "";
$database = "";


if(isset($_POST['submit'])){
  $customerID = $_POST['customerID'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $streetName = $_POST['streetName'];
  $usa = $_POST['usa'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $weight = $_POST['weight'];
  $trackingNumber = $_POST['trackingNumber'];
  $reciverName = $_POST['reciverName'];
  $price = $_POST['price'];
  $des_country = $_POST['des_country'];
  $rev_address = $_POST['rev_address'];
  $province = $_POST['province'];
  $reciverAddress = $rev_address.", ".$province;
  $customerAddress = $streetName.", ".$state.", ".$zip." ".$usa;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully";
echo "<br>";

// prepare and bind
$statement1 = $conn->prepare("insert into CUSTOMER (customerID, fname, lname, Address, Phone) VALUES (?, ?, ?, ?, ?)");
$statement1->bind_param("sssss", $customerID, $firstName, $lastName, $customerAddress, $phone);
$statement1->execute();
$statement1->close();

$statement2 = $conn->prepare("insert into LOCATION (trackingNum, receiverName, receiverAddress,region,cityOrcountry,price) values (?, ?, ?, ?, ?, ?)");
$statement2->bind_param("sssssd",$trackingNumber,$reciverName,$reciverAddress,$des_country,$province,$price);
$statement2->execute();
$statement2->close();

$statement3 = $conn->prepare("insert into SHIPPING (customerID, trackingNum, packageWeight)  values (?, ?, ?)");
$statement3->bind_param("ssd",$customerID, $trackingNumber, $weight);
$statement3->execute();
$statement3->close();

if($statement1 && $statement2 && $statement3){
  echo "New customer is registered";
}


?>