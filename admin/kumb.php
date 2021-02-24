<?php 
include "chabo.php";
   // $conn = mysqli_connect("sql302.epizy.com", "epiz_27539047", "lZl5fkLtl8", "epiz_27539047_register");
  $sql = mysqli_connect("localhost", "root", "", "uwam");
  $n = $_GET['userID'];
// echo $n;
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
?> 
<!DOCTYPE HTML>
<html>
<body>
<center><h2>System ya Kutunza Kumbukumbu UWAMWIMA</h2></center>

<form action="insert.php" method="post">

<table align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Zao</td>
<td> 
<select name="yield" class="form-control">
		<option>---Chagua Zao/Tunda---</option>
		<option value="Biringanya">Biringanya</option>
		<option value="Nyanya Chungu">Nyanya Chungu</option>
		<option value="Pilipili Boga">Pilipili Boga</option>
		<option value="Vitunguu Maji">Vitunguu Maji</option>
		<option value="Vitunguu Saum">Vitunguu Saum</option>
		<option value="Cabbage">Cabbage</option>
		<option value="Chinese Cabbage">Chines Cabbage</option>
		<option value="Matango">Matango</option>
		<option value="Beetroot">Beetroot</option>
		<option value="Bamia">Bamia</option>
		<option value="Maboga">Maboga</option>
		<option value="Pilipili Mbuzi">Pilipili Mbuzi</option>
		<option value="Zukini">Zukini</option>
		<option value="Mchicha">Mchicha</option>
		<option value="Tikiti">Biringanya</option>
		<option value="Tikiti Maji">Tikiti Maji</option>
		<option value="Machungwa">Machungwa</option>
		<option value="Mapapai">Mapapai</option>
		<option value="Passion">Passion</option>
								</select>
</td>
</tr>
<tr>
<td> Kiasi</td>
<td> <input type="text" name="amount" size="48"> </td>
</tr>
<tr>
<td> jina la Mwanachama</td>
<td><input type="userID" class="form-control"  value="<?php echo $username?>" readonly/></td>
</tr>
<tr>
<td> kadi no ya Mwanachama</td>
<td> <input type="userID" class="form-control" name="userID"  value="<?php echo $id?>" readonly/> </td>
</tr>
<!-- <tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr> -->

<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
<!-- <?php echo "ok";?> -->
</body>
</html>