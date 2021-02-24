<?php
$yield = $_POST['yield'];
$amount = $_POST['amount'];
$userID = $_POST['userID'];

if (!empty($yield) || !empty($amount) || !empty($userID) ) {

    //create connection
    
    // $conn = mysqli_connect("sql302.epizy.com", "epiz_27539047", "lZl5fkLtl8", "epiz_27539047_register");
  $conn = mysqli_connect("localhost", "root", "", "uwam");
      if ($conn === false) {
     die('Connect Error'. mysqli_connect_error());
    } else {
      $INSERT = "INSERT INTO users (yield, amount, userID) VALUES ('$yield', '$amount', '$userID')";
      if (mysqli_query($conn, $INSERT)) {
        echo "Imefanikiwa Kikamilifu";
      header ("location: kumb.php");
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