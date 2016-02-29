function ajaxdoc(btn) 
{
	var btnName=btn.value;
	alert(btnName);
	// var serviceid=document.getElementById('Serviceid').value;
	var servicename=document.getElementById('Servicename').value;
	var parentid=document.getElementById('Parentid').value;
	var icon=document.getElementById('path').value;
	var status=document.getElementById('status').value;
	var position=document.getElementById('position').value;
	var day = document.getElementById("day");
	// alert(day)
	// alert(selected_month);
	var validation = document.getElementById('period').value;
	// alert(validation);

	var URL="createservicedb.php?btnNames="+btnName +"&servicename="+ servicename +"&parentid="+ parentid +"&icon="+ icon +"&status="+status+"&position="+position+"&validperiod="+validation;// alert(URL);
	console.log(URL)
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
		console.log("url after sending");

		if (xhttp.readyState == 4 && xhttp.status == 200) 
		{
 			document.getElementById("c_service").innerHTML = xhttp.responseText;
		}
	}
		xhttp.open("GET", URL, true);
		console.log("url");
		xhttp.send();
		console.log("url after send");
		window.location.reload();

}
// window.onload=ajaxdoc;
// "&serviceid="+ serviceid +
