<?php
		// This PHP page Performs Operations like linking services when user clicks on HTML LINK BUTTON and also Breaking links between 
		// Services.

	$buttonValue=$_GET['button_val_container'];
	// echo $buttonValue;

	switch($buttonValue)
	{
		
		case 'Link'			:	linkFunction();			break;

		case 'Remove_Link'	:	reLinkFunction();		break;

	    default 			:	echo "Invalid Button Value Passed";
	}

function linkFunction()
{
	
		$con = new mysqli("192.241.244.177", "root", "tecnics", "sujidb");
		$parentServiceID=$_GET['Parent_ser_ser_id_container'];
		// echo $parentServiceID;
		$child_ser_parent_id = $_GET['child_ser_par_id_container'];
		$childServiceID=$_GET['child_ser_id_container'];
		// echo $childServiceID;

	if($parentServiceID != $childServiceID)
	{
		$display_string1;
		$display_string2;

		$stmt = "update tblservices set ParentServiceId =".$parentServiceID." where ServiceId = ".$childServiceID;
		$linkResult = mysqli_query($con, $stmt);
		
		$Select_Query1 = "select ServiceName from tblservices where ServiceId=".$parentServiceID;
		$linkResult1 = mysqli_query($con, $Select_Query1);

		$display_string = '<link rel="stylesheet" type="text/css" href="menumap.css"> <link rel="stylesheet" type="text/css" href="Tables.css"><aside><table>';
		$display_string .= "<tr>";
		$display_string .= "<th>Parent Service Name</th>";
		$display_string .= "<th>Child Service Name</th>";
		$display_string .= "</tr>";

		while($row = mysqli_fetch_assoc($linkResult1))
		{
			$display_string .= "<tr>";
			$display_string .= "<td>$row[ServiceName]</td>";
			// $display_string1 =  $row['ServiceName'];
			
		}

		$Select_Query2 = "select ServiceName from tblservices where ServiceId=".$childServiceID;
		$linkResult2 = $con -> query($Select_Query2);

		while($row = mysqli_fetch_assoc($linkResult2))
		{
			
			$display_string .= "<td>$row[ServiceName]</td>";
			$display_string .= "</tr>";
			// $display_string2 = $row['ServiceName'];
		}
		$display_string .= "</table></aside>";
		echo "--------After Linking the services-----------<br />";
		echo $display_string;
		// include("serviceslinktableonloadservices.php");
		// echo $display_string2;
	}
	else
	{
		echo '<script> alert("!!!Same Services Selected")</script>';
	}
}
function reLinkFunction()
{
	$con = new mysqli("192.241.244.177", "root", "tecnics", "sujidb");
	$childServiceID=$_GET['child_ser_id_container'];
	echo $childServiceID;
	$linkResult1 = "update tblservices set ParentServiceId = 0 where ServiceId = ". $childServiceID;
	$reLinkResult = mysqli_query($con, $linkResult1);
	$linkResult2 = "select ServiceName from tblservices where ServiceId=".$childServiceID;
	$reLinkResult1 = $con->query($linkResult2);
	echo "<style>
			table, th, td {
	    	border: 1px solid black;
	    	border-collapse: collapse;
			}
		</style>";
	$display_string = "<table>";
	$display_string .= "<tr>";
	$display_string .= "<th>Parent Service Name</th>";
	$display_string .= "</tr>";
	while($row = mysqli_fetch_assoc($reLinkResult1))
	{
		$display_string .= "<tr>";
		$display_string .= "<td>$row[ServiceName]</td>";
		$display_string .= "</tr>";
	}
	$display_string .= "</table>";
	// echo "--------After removing the service link-----------";
	echo $display_string;
	// include("serviceslinktableonloadservices.php");
}
?>
