<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";
$vazio= false;

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $Nome=$_GET["Nome"];
    $Id=$_GET["Id"];
    $Periodo=$_GET["Periodo"];
    $IdPreRequisitos=$_GET["IdPreRequisitos"];
    $Creditos=$_GET["Creditos"];
    $conn=new mysqli($server, $user, $password, $banco);

    if(empty($Nome) && empty($Periodo)&& empty($IdPreRequisitos) &&empty($Creditos))
        {
            $vazio = true;
        }
        else{ if(empty($Nome)){
                    $sql = "UPDATE `disciplina` SET `periodo` = $Periodo,`IdPreRequisitos`=$IdPreRequisitos,`Creditos`=$Creditos WHERE `Id`= $Id";
                }
            else {
                if(empty($Periodo)){
                    $sql = "UPDATE `disciplina` SET `nome`='$Nome',`IdPreRequisitos`=$IdPreRequisitos,`Creditos`=$Creditos WHERE `Id`= $Id";
                }
                else {
                    if(empty($IdPreRequisitos)){
                        $sql = "UPDATE `disciplina` SET `nome`='$Nome',`periodo`= $Periodo,`Creditos`=$Creditos WHERE `Id`= $Id";
                    }
                        else {
                            if(empty($Creditos)){
                            $sql = "UPDATE `disciplina` SET `nome`='$Nome',`periodo`= $Periodo,`IdPreRequisitos`=$IdPreRequisitos WHERE `Id`= $Id";
                            echo $sql;
                        }
                        else
                        {
                            
                            $sql = "UPDATE `disciplina` SET `nome`='$Nome',`periodo`= $Periodo,`IdPreRequisitos`= $IdPreRequisitos,`Creditos`= $Creditos WHERE `Id`= $Id";
                        }
                    }
                }
                if(!$conn->query($sql)){
                    echo($conn->error);
                }
            }
        }
    
    
}
?>