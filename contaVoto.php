<?php 

include 'urna_eletronica.class.php';
session_start();
$cod = $_GET['cod'];
$codigos = $_SESSION['codigo'];
$contarVoto = new Voto('');
$contarVoto->contaVoto($cod,$codigos);
header('Location:index.php');
?>