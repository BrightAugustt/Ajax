<?php

include("../controllers/general_controller.php");

function selectAllctr(){

   global  $result = selectallctr();

    echo "<table border= '1px'>";

    for ($i = 0; $i < count($result);$i++){

        echo "<tr>";
        echo "<td>".$result [$i]['pname']. "</td>";
        echo "<td>".$result [$i]['pphoned']. "</td>";

        
    }
}











?>


