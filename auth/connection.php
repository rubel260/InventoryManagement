<?php
function connect(){
    $dbHost="Localhost";
    $user= "root";
    $pass= "";
    $dbname= "inventory_project";

    $conn= new mysqli($dbHost, $user, $pass, $dbname);
    return $conn;

}
function closeConnect($cn){
    $cn->close();
}


?>