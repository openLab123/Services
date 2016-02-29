<style>
table, th, td 
{
     border: 1px solid black;
}
</style>
<script type="text/javascript" src="editservice.js"></script>
<script src="jquery-1.11.0.js"></script>

<?php
// echo "hai";
ini_set('display_errors', 'On');
$servername = "192.241.244.177";
$username = "root";
$password = "tecnics";
$Database = "dbService";

// Create connection
$con = new mysqli($servername, $username, $password, $Database);

if (mysqli_connect_errno())
{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id=$_GET['btnid'];
echo $id;
if ($_GET['btnNames']) 
{
	switch ($_GET['btnNames']) {
		case 'Add Service':
			$sql = "INSERT INTO tblService (serviceName,parentServiceID,serviceIconPath,serviceStatus,serviceIconDisplayPosition,ServiceValidPeriod) VALUES ('$_GET[servicename]','$_GET[parentid]','$_GET[icon]','$_GET[status]','$_GET[position]','$_GET[validperiod]')";
			mysqli_query($con, $sql);
			// echo $sql;
			// echo "Insert Successfully";
			break;
		case 'Delete Service':
				$sql="UPDATE tblService SET serviceStatus='0' WHERE serviceID=$id";
				// echo $sql;
				mysqli_query($con, $sql);
				// echo "updated";
				break;
		case 'Update Service':
		$sql="UPDATE tblService SET serviceName='$_GET[servicename]',parentServiceID='$_GET[parentid]',serviceIconPath='$_GET[icon]',serviceIconDisplayPosition='$_GET[position]',serviceStatus='$_GET[status]',ServiceValidPeriod='$_GET[validperiod]' WHERE serviceName='$_GET[servicename]'";
		// echo $sql;
		mysqli_query($con, $sql);
		// echo "updated";
		break;
		default:
			echo "Sorry";
			break;
	}
	// header("Location:showservicedata.php");

}



$sql="SELECT * FROM tblService ";
$result = $con->query($sql);
if($result->num_rows > 0)
{
    echo "<table style=border:1px solid black, align='center'><tr><th>serviceId</th><th>serviceName</th><th>parentServiceID</th><th>serviceIconPath</th><th>serviceStatus</th><th>DisplayPosition</th><th>ServiceValidPeriod</th><th>Delete/Edit Service</th></tr>";
    while($row = $result->fetch_assoc()) 
	    {
	        echo "<tr>";
	        echo "<td>".$row["serviceID"]."</td>";
	        echo "<td>".$row["serviceName"]."</td>";
	        echo "<td>".$row["parentServiceID"]."</td>";
	        echo "<td>".$row["serviceIconPath"]."</td>";
	        echo "<td>".$row["serviceStatus"]."</td>";
	        echo "<td>".$row["serviceIconDisplayPosition"]."</td>";
	        echo "<td>".$row["ServiceValidPeriod"]."</td>";
	        // echo "<td>$$$".mysql_real_escape_string($row["Edit"])."</td>";
	        echo "<td>".'<input type="button" value= "Delete Service" class="delete1" id="'.$row["serviceID"].'"></input><button type="button" value= "submit3" class="edit1" id="'.$row["serviceID"].'">Edit Service</button>'."</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
}

?>
