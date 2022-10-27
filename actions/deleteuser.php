
<?php
include("../controllers/general_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["delete"])){

    // The id is the only variable required. 
    // SInce the delete method is based on the id. 
    $pid = $_POST["pid"];


    // Call a controller
    deleteContact_ctr($id);

    if(deleteContact_ctr($id) === TRUE){

        // redirect to form
    header('Location:./form.php');

    }else{
        echo "Contact not found";
    }

}


?>