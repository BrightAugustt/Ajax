<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//
	
	public function add_user($pname,$pphoned){

        // Write query
        $sql = "INSERT INTO `phonebook`(`pid`, `pname`, `pphoned`) VALUES ('$pname','$pphoned')";

        return $this ->db_query($sql);
	}
	//--SELECTAll--//

    public function selectAll_user(){

        // write query
        $sql = "SELECT * FROM `phonebook`";

        // execute query
        return $this -> db_fetch_all($sql);


    }

    //--SELECTOne--//

    public function selectOne_user($id){

        // write query
        $sql = "SELECT * FROM phonebook where pid = $id";

        // execute query
        return $this -> db_fetch_one($sql);


    }
        

	//--UPDATE--//

    public function updateUser($id, $pname, $pphoned){

        // write query
        $sql = "UPDATE `phonebook` SET `pname`='$pname',`pphoned`='$pphoned' WHERE pid = $id";

        // execute query
        return $this -> db_query($sql);
    }


	//--DELETE--//
    public function deleteUser($id){

        // write query
        $sql = "DELETE FROM `phonebook`  WHERE pid = $id";

        // execute query
        return $this -> db_query($sql);
    }
	

}

?>