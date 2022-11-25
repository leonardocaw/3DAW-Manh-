<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $Id=$_GET["Id"];
    $conn=new mysqli($server, $user, $password, $banco);

    $sql="DELETE FROM `disciplina` WHERE `Id`=$Id";
    if(!$conn->query($sql)){
        echo($conn->error);
    }
    
}
?>

