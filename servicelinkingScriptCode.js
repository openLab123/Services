			//This JQuery Code gets all SERVICES list of data from "linkingservicedata.php" file and sends the data intto HTML LIST BOXES 
			//At the same time shows all SERVICES and their SUB-SERVICES list in a TABLE format on User Interface
			

	 // var Linking_Service_Data_Holder = [];
	 $(document).ready(function()
	 {
	 		//Here I'm getting all SERVICES from the below specified PHP page in JSON Format and am pushing that json data into another array
	 		//for I/O purpose

	 	$.getJSON("linkingservicedata.php", function(getlinking_service_data_here)
	 	{
	 		// Linking_Service_Data_Holder.push(getlinking_service_data_here);
	 		console.log(getlinking_service_data_here);

	 		//Here I'm dynamically creating <OPTION> tag into HTML page and loading json data into that options
	 		//to show as list of options

	 		for(var i = 0; i<getlinking_service_data_here.length; i++)
	 		{
	 			var option_tag_content = getlinking_service_data_here[i].ServiceName;
	 			var Parent_Service_Id = getlinking_service_data_here[i].ParentServiceId;
	 			console.log(Parent_Service_Id)
	 			var Service_Id = getlinking_service_data_here[i].ServiceId;
	 			var optiontag1 ='<option id="'+Service_Id+'" value="'+Parent_Service_Id+'">'+option_tag_content+"  "+Parent_Service_Id+"  "+Service_Id+'</option>';
	 			console.log(optiontag1)
	 			var optiontag2 ='<option id="'+Service_Id+'" value="'+Parent_Service_Id+'">'+option_tag_content+"  "+Parent_Service_Id+"  "+Service_Id+'</option>';
	 			$('#List_of_Services1').append(optiontag1);
	 			$('#List_of_Services2').append(optiontag2);
	 			
	 		}
	 	});

		// $.getJSON("servicelinking1testing.php", function(getservicelinking1testing_result_data){
		// 		var table = '<table> <tr> <td>'+getservicelinking1testing_result_data[0].ServiceName+'</td> <tr><td>'+getservicelinking1testing_result_data[1].ServiceName+'</td> </tr> </table>';

		// 		$('#sub_table_display').append(table);
		// });

		// Here am using ajax to make changes to the services data in the database, only when user clicks on HTML BUTTONS
		// When a button clicked, the button value comes here along with listbox selected services i.e., from "servicelinkScriptCode.js" file
		// Those will be parsed to "servicelinking1.php" file and at the same time the result of this php file will be stored here in a variable
		// And it'll sent to HTML page to display and if the ajax response fails it shows error message

	 	$("button").click(function()
	 	{
		 	var button_value = $(this).val();
		 	// alert(button_value);
		 	console.log(button_value);
		 	var optionvalue1 =$('#List_of_Services1 option:selected').attr("id");
		 	// alert(optionvalue1); 
		 	console.log(optionvalue1);
		 	var optionvalue2 = $('#List_of_Services2 option:selected').val();
		 	alert(optionvalue2);
		 	var optionvalue3 = $("#List_of_Services2 option:selected").attr("id");
		 	// alert(optionvalue3);
		 	console.log(optionvalue2);
		 	var Response = $.ajax({	url: "servicelinking1.php",
						 			type: "GET",
						 			dataType: "html",
						 			data: { "Parent_ser_ser_id_container"		:optionvalue1, 
						 					"child_ser_par_id_container"		:optionvalue2,
						 					"child_ser_id_container"			:optionvalue3, 
						 					"button_val_container"				:button_value 
						 				  },
		 						  });
		 		Response.done(function(Response_Data)
		 		{
		 			// resp_dat_arr.push(Response_Data);
		 			// // resp_dat_arr.push(Response_Data);
		 			// var table_contents=resp_dat_arr[0].ServiceName;
		 			// alert(table_contents);
		 			// table_contents += '<table id="sub_table"> <th> Parent Service </th> 
		 			// <th> Child Service </th><tr> <td>'+Response_Data[0].ServiceName+'</td> 
		 			// <td>'+Response_Data[1].ServiceName+'</td> </tr> </table>';
		 			$("#sub_table_display").html(Response_Data);
		 		});
		 		Response.fail(function(jqXHR, textStatus)
		 		{
		 			alert("Response Failed"+textStatus);
		 		});
	 	});
	});
