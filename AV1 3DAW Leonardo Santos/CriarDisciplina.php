<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $Nome=$_GET["Nome"];
    $Id=$_GET["Id"];
    $Periodo=$_GET["Periodo"];
    $IdPreRequisitos=$_GET["IdPreRequisitos"];
    $Creditos=$_GET["Creditos"];
    $conn=new mysqli($server, $user, $password, $banco);

    $sql="INSERT INTO `disciplina`(`Nome`, `Id`, `Periodo`, `IdPreRequisitos`, `Creditos`)
    VALUES ( '$Nome','$Id','$Periodo','$IdPreRequisitos','$Creditos')";
   
   $result=$conn->query($sql);
    
}
?>


