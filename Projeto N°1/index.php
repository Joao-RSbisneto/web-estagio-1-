<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    
</body>
</html>


<?php  
    
@include_once("topo.php");
@include_once("menu.php");

if(empty($_SERVER['QUERY_STRING'])){
    $var = "conteudo.php";
    include_once($var);

}else{
    $pg = $_GET['pg'];
    include_once("pg.php");
}


include_once("TEMPLATES/rodape.php");

?>