
$(document).ready(function(){
	$('#submit3').click(function(){
	console.log("Hi");
	var servicename = $("#Servicename").val();
	console.log(servicename);
	$.ajax({ url:"editservicedbdata.php",
    		type: "POST",
    		data:{s_name:servicename}, 
			success:	function(data)
			{
						// console.log("Data: " + data );
				console.log(data)
				var output=JSON.parse(data);
				console.log(output);
		 		var counter=1;

			 	$.each( output, function( key, val ) {
			 		var value = val;
			 		// console.log(value)
	 		        console.log(key+":"+value);
	 		        $("input[name^=service"+counter+"]").val(value);
	 		        counter++;
	 		        // console.log($("input[name=service]").val(value))

				});
			}
		});
      });
  });