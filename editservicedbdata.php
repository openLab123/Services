
<?php
// include("newservice.html");
// function showdata()
// {
	$con=mysqli_connect("192.241.244.177","root","tecnics","dbService");
	if (mysqli_connect_errno())
	{
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$buttonValue=$_POST['btnvalue'];
	// $servicename='Jobs';

	// echo $servicename;
	if($buttonValue)
	{
		$sql="SELECT serviceName,parentServiceID,serviceIconPath,serviceStatus,serviceIconDisplayPosition,ServiceValidPeriod FROM tblService WHERE serviceID='$buttonValue'";
		// echo $sql;
		$result = mysqli_query($con,$sql) or die ("Error");
		// echo $result;
		if(!$result)
		{
			echo "Something wrong in the query";
			break;
		}

		$data = array();
		while($row = mysqli_fetch_array($result)) 
		{
			// $data[] = $row;	
			$data = array( 'ServiceName'=>$row['serviceName'],'parentServiceID'=>$row["parentServiceID"],'IconPath'=>$row["serviceIconPath"],'status'=>$row["serviceStatus"],'Dis_position'=>$row["serviceIconDisplayPosition"],'validation'=>$row["ServiceValidPeriod"]) ;
		}

		echo json_encode($data);

	}
	else
	{
		echo "Inavalid ServiceName";
	}
	
	mysqli_close($con);
    
?>