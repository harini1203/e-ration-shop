<!DOCTYPE html>
<html>
<style>
body {
  font-family: Calibri, Helvetica, sans-serif;
 
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}
.imgj{
 repeat: no-repeat;
 attachment: fixed;
 size: 30px 40px;
 width:120px;

height:120px
opacity=0.75
}
</style>
<image class="imgj" src="https://www.tnrtp.org/wp-content/uploads/2020/06/TN-LOGO-T-.png" alt="logo">
<center><br><p style="font-size:25px">
<?php
	$rice = $_POST['rice'];
	
	$dhaal = $_POST['dhaal'];
$sugar=$_POST['sugar'];
$oil=$_POST['oil'];
$wheat=$_POST['wheat'];
$kerosene=$_POST['kerosene'];
$date = $_POST['date'];
$time = $_POST['time'];

	// Database connection
	$conn = new mysqli('localhost','root','','cardtype');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {


		$stmt = $conn->prepare("insert into phhrice(rice,dhaal,sugar,oil,wheat,kerosene,date,time) values(?,?,?,?,?,?, ?,?)");
		$stmt->bind_param("iiiiiiss", $rice,$dhaal,$sugar,$oil,$wheat,$kerosene,$date,$time);
		$execval = $stmt->execute();
		echo '<script>alert("Registration successfully...")</script>';
		
$sql = "SELECT *FROM phhrice ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

echo  "Token No:PHHRICE" . $row["id"]."<br>" ;echo "<table border='1'>
<tr>
<th>Commodities</th>
<th>Quantities</th>
<th>Amount</th>
</tr>";
echo "<tr>";
echo "<td> Rice </td>";
echo "<td>" . $row["rice"] . "</td>";
echo "<td>0</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Dhaal </td>";
echo "<td>" . $row["dhaal"] . "</td>";
echo "<td>" . $row["dhaal"]*10 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Sugar </td>";
echo "<td>" . $row["sugar"] . "</td>";
echo "<td>" . $row["sugar"]*10 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Oil </td>";
echo "<td>" . $row["oil"] . "</td>";
echo "<td>" . $row["oil"]*10 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Wheat </td>";
echo "<td>" . $row["wheat"] . "</td>";
echo "<td>" . $row["wheat"]*10 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Kerosene </td>";
echo "<td>" . $row["kerosene"] . "</td>";
echo "<td>" . $row["kerosene"]*10 . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> Total Amount</td>";
echo "<td>" .$row["dhaal"]*10 +$row["sugar"]*10+$row["oil"]*15+$row["wheat"]*20+$row["kerosene"] ."</td>";
echo "</tr>";
echo "<td> Time </td>";
echo "<td>" . $row["time"] . "</td>";
echo "</tr>";

echo "</table>";
}


		$stmt->close();
		$conn->close();
	}}
?>
<br>
<button onclick="window.print()">E-Bill</button></p></center>
</body>
</html>