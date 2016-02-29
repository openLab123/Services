<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
	<center><h1><p> Services</p></h1></center>
	<style type="text/css">
    input[type='number'] { width:250px; height: 20px; font-style: oblique; text-align: center}
    input[type='text'] { width:250px; height: 20px; font-style: oblique; text-align: center}
    input[type='button'] {width: 150px; height: 20px; color: green ;font-style: oblique;text-align: center}
    button[type='button'] {width: 150px; height: 20px; color: green ;font-style: oblique;text-align: center}
    label[for='servicename']{font-style: oblique;}
    label[for='parentid']{font-style: oblique;}
    label[for='path']{font-style: oblique;}
    label[for='status']{font-style: oblique;}
    label[for='position']{font-style: oblique;}
    label[for='validation']{font-style: oblique;}


</style>

<style type="text/css">

label{
display:inline-block;
width:200px;
margin-right:30px;
text-align:right;
}
fieldset{
border:none;
width:500px;
margin:5px auto;
}
</style>
<style>
 table, th, td 
 {
      border: 1px solid black;
 }
 </style>
<script src="jquery-1.11.0.js"></script>

<script type="text/javascript" src="createservice.js"></script>
<script type="text/javascript" src="editservice.js"></script>
<script src="jquery-1.11.0.js"></script>

</head>
<body>
<fieldset>
<form id="service">
<input type="hidden" id="Serviceid" name="s_id" value=""></input>
<label for="servicename">Service Name:</label><input type="text" id="Servicename" name="service1" placeholder="Enter ServiceName" value="" autofocus=""></input><br><br>
<label for="parentid">ParentServiceId:</label><input type="number" id="Parentid" name="service2" placeholder="Enter ParentServiceId" value=""></input><br><br>
<label for="path">Icon Path:</label><input type="text" id="path" name="service3" placeholder="Enter Icon Path" value=""></input><br><br>
<label for="status">Status:</label><input type="text" id="status" name="service4" placeholder="Enter Status" value=""></input><br><br>
<label for="position">Display Position:</label><input type="text" id="position" name="service5" placeholder="Enter Display Position" value=""></input><br><br>
<label for="validation">valid Period:</label><input type="text" id="period" name="service6" placeholder="(eg:0Months0Days or 0Days..)" value=""></input><br><br>
<center><input type="button" id= "submit1" name="submit" onclick="ajaxdoc(this)" value="Add Service"></input>
<input type="button" id= "submit2" name="submit" onclick="ajaxdoc(this)" value="Update Service"></input>

<!-- <button type="button" id= submit3 name="submit" value="Edit Service">Edit Service</button> -->
<center>
</form>

</fieldset>
<form id="c_service">
<?php include 'showservicedata.php';?>
</form>
<!-- <script type="text/javascript" src="editajax.js"></script> -->


</body>
</html>
