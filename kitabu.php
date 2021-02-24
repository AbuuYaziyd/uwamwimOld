<?php
$n = $_GET['userID'];
// echo $n;
 // $conn = mysqli_connect("sql302.epizy.com", "epiz_27539047", "lZl5fkLtl8", "epiz_27539047_register");
  $sql = mysqli_connect("localhost", "root", "", "uwam");

{
   $query = "
   SELECT * FROM users WHERE userID LIKE '%".$n."%'";
}
$result = mysqli_query($sql, $query);
if ($sql -> connect_errno)
				{
			  		echo "Failed to connect to MySQL: " . $sql -> connect_error;
			  		exit();
				}

					$sql -> select_db("users");
				if ($result = $sql -> query("$query")) 
  				{
            $row = mysqli_fetch_array($result);
			  		$username=$row["username"];
            $id=$row["userID"];
            $gen=$row["gender"];
            $age=$row["age"];
            $phone=$row["phone"];
            $dist=$row["district"];
            $grp=$row["grp"];
				}
        {
   $d = "
   SELECT * FROM prod WHERE userID LIKE '%".$n."%'";
}
$res = mysqli_query($sql, $d);
if ($sql -> connect_errno)
				{
			  		echo "Failed to connect to MySQL: " . $sql -> connect_error;
			  		exit();
				}
// YEAR(created) AS 'year', MONTH(created) AS 'month', DAY(created) AS 'day',
					$sql -> select_db("prod");
				if ($res = $sql -> query("$d")) 
  				{
            $rw = mysqli_fetch_array($res);
			  		$yield=$rw['yield'];
            $date=$rw['created'];
            $amount=$rw['amount'];
          
				}
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>UWAMWIMA | Kitabu</title>

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="assets/js/java.js"></script>
<script src="https://use.fontawesome.com/8dd27289c6.js"></script>
    <!-- Custom styles for this template -->


    <!-- <link href="assets/css/cover.css" rel="stylesheet"> -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
  </header>


<!-- ADD CONTENT HERE -->
<h1>Kitabu cha Kumbukumbu za Uzalishaji kwa Mkulima Mdogo wa Mboga na Matunda
</h1>
<div id = "content">
<div id = "left">
	<h4><p align = "left">Jina la Mkulima: <?php echo $username; ?></p></h4>

	<h4><p align = "left">Jumuiya: UWAMWIMA</p></h4>

	<h4><p align = "left">Wilaya: <?php echo $dist; ?></p></h4>

	
</div><br>
<div id = "right">
<h4><p align = "left">Shehia: </p></h4>

	<h4><p align = "left">Kikundi: <?php echo $grp; ?></p></h4>

	<h4><p align = "left">Mwezi: 

<select name="mwezi" id="mwezi">
<option selected disabled>Chagua mwezi</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>

   </p></h4>
</div>
</div>
<div class="container">
      <br />
      <br />
      <br />
<div class="table-responsive">
               <table class="table table bordered table-striped">
  <col>
  <colgroup span="2"></colgroup>
  <colgroup span="2"></colgroup>
  <tr>
    <th rowspan="2">Mazao</th>
    <!-- <td rowspan="2">Mazao</td> -->
    <!-- <th colspan="2" scope="colgroup">Mars</th> -->
    <th colspan="31" scope="colgroup">Tarehe/Siku</th>
  </tr>
  <tr>
<?php 
  for ( $i=1;$i<=31;$i++){
   echo "<th>$i</th>";
  }
  ?>
  </tr>
   <?php 
  for ( $p=1;$p<=30;$p++){
    switch ($p) {
      case 1:
        $name = "Biringanya (Kg)";
        break;
      case 2:
        $name = "Vitunguu (Kg)";
        break;
      case 3:
        $name = "Tungule (Sado)";
        break;
      case 4:
        $name = "Nazi";
        break;
      case 5:
        $name = "Embe";
        break;
      case 6:
        $name = "Machungwa";
        break;
      default:
       $name = "Vitunguu (Kg)";
        break;
    }
    echo'<tr>
    <th colspan="1" scope="colgroup">';echo $name;'</th>'
     ?><?php
  for ( $O=1;$O<=30;$O++){

{
   $e = "
   SELECT * FROM prod WHERE userID LIKE '%".$n."%' AND yield LIKE '%".$name."%' AND MONTH(created) LIKE '%".$O."%'
   
   ";
}
$val = mysqli_query($sql, $e);
if ($sql -> connect_errno)
				{
			  		echo "Failed to connect to MySQL: " . $sql -> connect_error;
			  		exit();
				}
// YEAR(created) AS 'year', MONTH(created) AS 'month', DAY(created) AS 'day',
					$sql -> select_db("prod");
				if ($val = $sql -> query("$e")) 
  				{
            $rm = mysqli_fetch_array($val);
			  		// $yield=$rw['yield'];
            // $date=$rw['created'];
            // $amount=$rw['amount'];
          
				}


   echo "<th>.</th>";
  }
  
  '</tr>';
   echo "<th>.</th>";
  }
  ?>
  <tr>
    <!-- <th colspan="1" scope="colgroup">Teddy Bears</th> 
    <?php 
  for ( $i=1;$i<=31;$i++){
   echo "<th>.</th>";
  }
  ?>-->
  </tr>
  <!-- <tr>
    <th scope="row">Board Games</th>
     <?php 
  for ( $i=1;$i<=31;$i++){
   echo "<th>.</th>";
  }
  ?>
  </tr> -->
  </col>
</table></div>


    <p align="center"><button class="btn btn-primary" onclick="window.print()">Print this Page</button>
    <button class="btn btn-primary" onclick="window.location.href='admin/admn-index.php'">Home</button></p>
  </body>
<?php 
include 'includes/footer.php';
?>