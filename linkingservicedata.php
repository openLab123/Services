<?php
  $ServiceArray= array();
 
$con = mysqli_connect("192.241.244.177","root","tecnics", "sujidb"); 
  
  
  $sql = "select ServiceName, ServiceId,ParentServiceId from tblservices";
  $result = $con -> query($sql);
  
    while($row = mysqli_fetch_assoc($result))
    {
      $jsonArray[] = $row;
    }
    echo json_encode($jsonArray);   
?>