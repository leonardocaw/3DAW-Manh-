<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";
$verificar=false;

    $conn=new mysqli($server, $user, $password, $banco);

    $sql="SELECT * FROM `disciplina`";
    $result = $conn->query($sql);
    if($result==true){
    $verificar=true;
}

?>