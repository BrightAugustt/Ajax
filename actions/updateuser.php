
<?php
include("../controllers/general_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["update"])){

    // Variable to capture the name value for each user input.
    $pname = $_POST["fname"];
    $pphoned = $_POST["number"];
    $id = $_POST["pid"];


    // Call a controller
    updateContact_ctr($id, $pname, $pphoned);


    if (updateContact_ctr($id, $pname, $pphoned) === True){

         // redirect to form
        header('Location:./form.php');
        
    }else{
        echo"Contact not present";
    }
















































    

}else{
    echo "Something went wrong";
}


?>