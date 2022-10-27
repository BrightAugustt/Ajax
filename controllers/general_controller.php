<?php
//connect to the user account class
include("../classes/Contact_class.php");

//sanitize data




//--INSERT--//
function addContact_ctr($pname,$pphoned){

    // Create an instance of the class
    $add_user = new general_class();

     return $add_user->add_user($pname,$pphoned);
}

//--SELECTONE--//
function select_oneContact_ctr($id){

    // Create an instance of the class
    $selectone_user = new general_class();

     return $selectone_user->selectOne_user($id);
}


//--SELECTALL--//
function select_AllContact_ctr($id){

    // Create an instance of the class
    $selectall_user = new general_class();

     return $selectall_user->selectAll_user($id);
}


//--UPDATE--//

function updateContact_ctr($id, $pname,$pphoned){

    // Create an instance of the class
    $update_user = new general_class();

     return $update_user->updateUser($id, $pname, $pphoned);
}

//--DELETE--//
function deleteContact_ctr($id){

    // Create an instance of the class
    $delete_user = new general_class();

     return $delete_user-> deleteUser($id);
}


?>