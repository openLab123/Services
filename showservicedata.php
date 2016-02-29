
<style>
table, th, td 
{
     border: 1px solid black;
}
table {
    border-collapse:collapse;
    width: 100%;
}

td {
    height: 30px;
    vertical-align: middle;
    text-align: center;

}
tr:hover{background-color:#f5f5f5}
th
{
    background-color: #4CAF50;
    color: white;

}

</style>
<script type="text/javascript" src="editservice.js"></script>
<script src="jquery-1.11.0.js"></script>

<?php
// include("newservice.html");
// function showdata()
// {
	$con=mysqli_connect("192.241.244.177","root","tecnics","dbService");
	if (mysqli_connect_errno())
	{
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql="SELECT serviceID,serviceName,parentServiceID,serviceIconPath,serviceStatus,serviceIconDisplayPosition,ServiceValidPeriod  FROM tblService";
	// echo $sql;
	$result = $con->query($sql);
	if($result->num_rows > 0)
	{
	    echo "<table align='center'><tr><th>serviceId</th><th>serviceName</th><th>parentServiceID</th><th>serviceIconPath</th><th>Status</th><th>DisplayPosition</th><th>ServiceValidPeriod</th><th>Delete/Edit Service</th></tr>";
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
	else
	{
		echo "No Result";
	}

// }

?>