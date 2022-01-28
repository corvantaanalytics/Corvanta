<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$eName = $_POST['eName'];
$eEmail = $_POST['eEmail'];
$inName = $_POST['inName'];
$eRevenue = $_POST['eRevenue'];
$itSpend = $_POST['itSpend'];
$appType = $_POST['appType'];
$totalSpend = $_POST['totalSpend'];
$avgTicket = $_POST['avgTicket'];
$noUser = $_POST['noUser'];

// database insert SQL code
$sql = "INSERT INTO `tbl_all` (`id`, `fldName`, `fldEmail`, `fldIndustry`, `fldRevenue`, `fldItspend`, `fldApptype`, `fldTotaleffort`, `fldAvgticket`, `fldNouser`) VALUES ( '0','$eName', '$eEmail', '$inName', '$eRevenue', '$itSpend', '$appType', '$totalSpend', '$avgTicket', '$noUser')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script>alert("Thank You. Register Successful")</script>';
}
?>
