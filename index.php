
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
    <form name="form1" id="callForm" action="./actions/adduser.php" method="POST">
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
        <button id="butsave" value="submit" name="submit" onclick="formsubmit()" >Submit</button>
    </form>
<!-- <script>
		  $("#butsave").click(function(ev) {
			//   var form = $("#callForm");
			  var fname = $("#fname").val();
			  var fnumber = $("#fnumber").val();
			  var url = form.attr('action');
			  if (fname!="" && fnumber!=""){
				$.ajax({
				  type: "POST",
				  url: url,
				  data: form.serialize(),
				  success: function(data) {
						
					// Ajax call completed successfully
					alert("Form Submited Successfully");
				  },
				  error: function(data) {
						
					  // Some error in ajax call
					  alert("some Error");
				  }
			  });
			  }else{
				alert("Please fill all the flield");
			  }
			  
		  });

</script> -->

</script>
</body>
</html>

