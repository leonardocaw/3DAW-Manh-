<?php
$server="localhost";
$user="root";
$password="";
$banco="3DAWleo";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $conn=new mysqli($server, $user, $password, $banco);
    $arq =  fopen($_FILES["arquivo"]["name"], "r");
    while(($linha=fgets($arq))!==false)
    {
        $dividir=explode(";", $linha);
        $sql="INSERT INTO `usuarios`(`nome`, `email`, `senha`, `tipo`, `perfil`) 
        VALUES ('$dividir[0]','$dividir[1]','$dividir[2]','$dividir[3]','$dividir[4]')";
        $result = $conn->query($sql);
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>

</head>
<body>
    <form action="User.php" enctype="multipart/form-data" method="POST" >
        arquivo:<input type="file" name="arquivo"><br>
        <input type="submit" name="botao" value="enviar">
    </form> 
</body>
</html>