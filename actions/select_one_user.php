
<?php
include("../controllers/general_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["submit"])){

    // Variable to capture the name value for each user input.
    $pname = $_POST["fname"];
    $pphoned = $_POST["number"];
    $pid = $_POST["pid"];


    // Call a controller
    select_oneContact_ctr($id);

    // redirect to form
    header('Location:./form.php');

}else{
    echo "Something went wrong";
}


?>