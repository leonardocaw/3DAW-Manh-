<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";
$linha=array("", "", "", "", "");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Id=$_POST["Id"];
    $conn=new mysqli($server, $user, $password, $banco);

    $sql="SELECT * FROM `disciplina` WHERE `Id`= $Id";
    $result = $conn->query($sql);
    if($result==true){
    
    $linha= mysqli_fetch_row($result);
    }
}
?>
