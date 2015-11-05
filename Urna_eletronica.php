<head><meta charset="utf-8"></head>
<?php
/*
$arquivo = "teste.txt";

$conteudo = "isto é um test";
$abertura = fopen("$arquivo","w+");
$gravacao = fwrite($abertura,$conteudo);

echo "numero de caracteres gravados: ".$gravacao;
fseek($abertura,0);
$leitura = fread($abertura,filesize($arquivo));
echo "<br>conteudo do arquivo:". $leitura;
 */





require_once 'urna_eletronica.class.php';


if(isset($_POST['ncandidato'])){
    
$voto = $_POST['ncandidato'];

$votando = new Voto($voto);
$votando->votar($voto);
}else{
    $voto = ' ';

$votando = new Voto($voto);
$votando->votar($voto);



}