<?php
$amount = $_POST['amount'];
$yield = $_POST['yield'];
$userID = $_POST['userID'];
if (!empty($amount) || !empty($yield) || !empty($userID)) {

    //create connection
    // $conn = mysqli_connect("sql302.epizy.com", "epiz_27539047", "lZl5fkLtl8", "epiz_27539047_register");
  $conn = mysqli_connect("localhost", "root", "", "uwam");
      if ($conn === false) {
     die('Connect Error'. mysqli_connect_error());
    } else {
      $INSERT = "INSERT INTO prod (amount, yield, UserId) VALUES ('$amount', '$yield', '$userID')";
      if (mysqli_query($conn, $INSERT)) {
      header ("location: search.php");
     } else {
      echo "Kuna Mtu tayari ameshasajiliwa!";
     }
    }
}else{
	echo "Sehemu zote lazima kujaza!";
	die();
}
mysqli_close($conn);
?>