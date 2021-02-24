<?php
$con = mysqli_connect('localhost', 'root', '', 'uwam');
//   $con = mysqli_connect('sql102.epizy.com', 'epiz_27803266', 'T4LcnzZxVWa
// ', 'epiz_27803266_attendance');
$query = mysqli_query($con, "SELECT MAX(id) as max FROM users"); 
$row = mysqli_fetch_array($query);
$highest_id = $row['max'];
// echo $highest_id;
            $k = "UWAM";
            //   $n = $row["id"];
              $id = $highest_id+1;
            //   echo $id;
            $dt = date("d");
              $month = date("m");
              $year = date("Y");
              $base_year = 2021;
            //   $intake = intval($year) - $base_year;
            //   if ($month >= 1 && $month<=6) {
            //       $intake += 1;
				//    echo $k . "" . $id . "" . $intake . "" . $year;
				   $reg = $k . "" . $id . "" . $dt . "" . $month . "" . $year;
				   echo $reg;
                
            //    } else if($month >= 7 && $month<=12) {
            //         $intake += 2;
			// 		// echo $k . "" . $id . "" . $intake . "" . $year;
			// 		$reg = $k . "" . $id . "" . $intake . "" . $year;
			//    }
// include 'includes/login.inc.php'; 
// if (empty($_SESSION['username'])) {
//    header('location: login.php');
//    exit();
//  } 
// include 'includes/signup.inc.php';
?>