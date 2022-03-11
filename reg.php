<?php
require("config.php");
if (isset($_POST['submit'])) {


// Taking all 5 values from the form data(input)
$first_name = $_REQUEST['firstname'];
$last_name = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$DOB = $_REQUEST['DOB'];
$sex = $_REQUEST['agenda'];
$phone = $_REQUEST['phone'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];

$state = $_REQUEST['state'];
$exp = $_REQUEST['exp'];
$bank_name = $_REQUEST['bank_name'];
$acc_num = $_REQUEST['acc_num'];
$app = $_REQUEST['app'];

$link = $_REQUEST['link'];
$ID = strtoupper(bin2hex(random_bytes(4)));

echo $bank_name;

	
	$sql = "INSERT INTO `employee` VALUES ('$ID','$first_name',
	'$last_name','$email','$sex','$DOB','$phone','$exp','$state','$city','$country', '$bank_name','$acc_num','$link','$app', Now()) ";
	if(mysqli_query($conn, $sql)){
		echo "successfully";
	}else{
		echo "something went wrong";
	}

}