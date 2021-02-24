<?php
// $connect = mysqli_connect("sql302.epizy.com", "epiz_27539047", "lZl5fkLtl8", "epiz_27539047_register");
$connect = mysqli_connect("localhost", "root", "", "uwam");
$output = '';

if(isset($_POST["query"]))
{
   $search = mysqli_real_escape_string($connect, $_POST["query"]);
   $query = "
   SELECT * FROM users 
   WHERE username LIKE '%".$search."%'
   OR gender LIKE '%".$search."%' 
   OR age LIKE '%".$search."%' 
   OR userID LIKE '%".$search."%' 
   OR phone LIKE '%".$search."%'
   OR district LIKE '%".$search."%' 
   OR grp LIKE '%".$search."%'
   ";
}
else
{
   $query = "
   SELECT * FROM users ORDER BY id";
}
$result = mysqli_query($connect, $query);
// $no = for ($i=0; $i <count($result); $i++) { 
//         echo $i;
//       }
if(mysqli_num_rows($result) > 0)
{
   $output .= '<div class="table-responsive">
               <table class="table table bordered table-striped">
                  <tr>
                     <th>ID No</th>
                     <th>Member Name</th>
                     <th>Gender</th>
                     <th>Age</th>
                     <th>Phone</th>
                     <th>District</th>
                     <th>Group</th>
                     <th><a>Add/View Data</a></th>
                  </tr>';

   while($row = mysqli_fetch_array($result))
   {
$tdy = new DateTime(date('y-m-d'));
$bdy = new DateTime($row['created']);
$dif = $tdy ->diff($bdy);

// printf(' %d ',$dif->y);
      $output .= '
         <tr>
            <td>'.$row["userID"].'</td>
            <td>'.$row["username"].'</td>
            <td>'.$row["gender"].'</td>
            <td>'.$row["age"].'</td>
            <td>'.$row["phone"].'</td>
            <td>'.$row["district"].'</td>
            <td>'.$row["grp"].'</td>
            <td>
            <a href = "kumb.php?userID=' . $row['userID'] . '" target="_blank"><button><strong>.    +     .</strong></button></a>
            <a href = "../kitabu.php?userID=' . $row['userID'] . '" target="_blank"><button><strong>View</strong></button></a></td>
         </tr>
      ';
   }
   echo $output;
   $no = mysqli_num_rows($result);
   echo "Total Result Count = ";
   echo $no;
}
else
{
   echo 'Data Not Found';
}
?>