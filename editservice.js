    
    $(document).ready(function(){
    $('.edit1').click(function(){
    console.log("Hi");
    var buttonvalue = $(this).attr("id"); 
    alert(buttonvalue);
    
    // var serviceid = $("#Serviceid").val();
    console.log(buttonvalue);
    $.ajax({ url:"editservicedbdata.php",
            type: "POST",
            data:{btnvalue:buttonvalue}, 
            success:    function(data)
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
    $('.delete1').click(function(){
    console.log("Hi");
    var buttonid = $(this).attr("id"); 
    alert(buttonid);
    var buttonvalue = $(this).val();
    console.log(buttonvalue)
    // var serviceid = $("#Serviceid").val();
    console.log(buttonid);
    $.ajax({ url:"createservicedb.php",
            type: "GET",
            data:{btnid:buttonid,btnNames:buttonvalue}, 
            success:    function(data)
            {
                        // console.log("Data: " + data );
                console.log(data)
            }
        });
      });
  });
