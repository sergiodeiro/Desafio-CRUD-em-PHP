<?php
require '../controller/banco.php';

$id = !empty($_GET['id']) ? $_REQUEST['id'] : header("location: ../index.php");

if (!empty($_POST)) {
    $id = $_POST['id'];
    
    //Delete do banco endereço 
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM endereco where cliente_id = ?";
    $q   = $pdo->prepare($sql);
    $q->execute(array(
        $id
    ));
    
    //Delete do banco cliente
    $sql = "DELETE FROM cliente where id = ?";
    $q   = $pdo->prepare($sql);
    $q->execute(array(
        $id
    ));
    Banco::desconectar();
    header("Location: ../index.php?delete=true");
}