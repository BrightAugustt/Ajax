
<?php
include("../controllers/general_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["submit"])){

    // Variable to capture the name value for each user input.
    $pname = $_POST["fname"];
    $pphoned = $_POST["number"];


    // Call a controller
    $result = addContact_ctr($pname,$pphoned);

    if($result){
        echo json_encode(array("statuscode"=>200));
    //      // redirect to header
        // header('Location:../index.php');
    }
    else{
        echo json_encode(array("statusCode"=>201));
    }



// }else{
//     echo "Something went wrong";
    }



?>