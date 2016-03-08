<link rel="stylesheet" type="text/css" href="Tables.css"> 
<?php

	$con = mysqli_connect("192.241.244.177","root","tecnics", "sujidb") or die("Error: " + mysqli_error());
	$query_for_showing_all_services = "SELECT t1.ServiceName as mainService,IFNULL(t2.ServiceName,'---') as childService from tblservices t1 LEFT OUTER JOIN tblservices t2 ON t2.ParentServiceId = t1.ServiceId ORDER BY t1.ServiceId";
	$query_result = $con -> query($query_for_showing_all_services);
	$display_string = "<table> <tr> <th>Parent Service Name</th><th>Child Service Name</th></tr>";
	while($row = mysqli_fetch_assoc($query_result))
	{
		$display_string .= "<tr><td>$row[mainService]</td><td>$row[childService]</td></tr>";
	}
	// echo json_encode($jsonarray);
	$display_string .= "</table>";
	echo $display_string;
	
?>