<?php
//App Name
$appName = "Recolha de Alunos";

//Ligação à BD
$utilizador = "root";
$password = "";
try {
    //Criar a Ligação
    $db = new PDO("mysql:host=localhost;dbname=dados",$utilizador,$password);
    //Ligar
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falha na ligação à Base de Dados: " . $e->getMessage();
}
?>