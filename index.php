
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>FORM VIEW</title>
</head>
<body>
    
<!-- Form -->
    <form name="form1" id="callForm"  method="POST">
        <label for= "fname"> Enter First Name</label>
        <br>
        <br>
        <!-- ID is used for referencing activities on the frontend -->
        <input type= "text" id="fname" name="fname" required>
        <br>
        <br>
        <label for = "number">Enter Phone Number</label>
        <br>
        <br>
        <input type="tel" id="fnumber" name="number" required >
        <br>
        <br>
        <button id="butsave" value="submit" name="submit" >Submit</button>
    </form>
<script>
$(document).ready(function(){
	$('#butsave').on('click',function(){
		$("#butsave").attr("disabled", "disabled");
		var fname = $('#fname').val();
		var fnumber = $('#fnumber').val();
		if (fname!="" && fnumber!=""){
			$.ajax({
				url: "./actions/adduser.php",
				type: "POST",
				data: {
					fname:fname,
					fnumber:fnumber,
				},
				cache:false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#callForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully!');
					}
					else if(dataResult.statusCode==201){
						alert("Error occured!");
					}
				}
			});	
			}
			else{
				alert('Please fill all the field');
			}
});
});

</script>
</body>
</html>

