<?php
class Voto{
    
    public $_Nvoto;
    
    function __construct($voto) {
        $this->_Nvoto = $voto;
    }
    public function votar($voto){
        $arquivo = "votos.txt";
        $conteudo = $voto."\r\n";
        $abertura = fopen("$arquivo","a+");
        $gravacao = fwrite($abertura,$conteudo);
        fclose($abertura);
        $_SESSION['codigo'] = 0;
        header("location:index.php?return=1");  
    }
    public function contaVoto($cod,$codigos){
        session_start();
        $_SESSION['codigo'] = $codigos.$cod;
        header("location:index.php");
    }
    public function corrigirVoto(){
        session_start();
        $_SESSION['codigo'] = '';
        header("location:index.php"); 
    }
    public function votarBranco(){
        $arquivo  = "Branco.txt";
        $abertura = fopen("$arquivo","r+");
        $ler      = fread($abertura, filesize($arquivo));
        fclose($abertura);
        $abertura = fopen("$arquivo","w+");
        $conteudo = $ler + 1 . "\r\n";
        echo $ler."+ 1";
        $gravacao = fwrite($abertura,$conteudo);
        fclose($abertura);
        header("location:index.php?return=1");
    }
    public function votarNulo(){
        $arquivo = "Nulo.txt";
        $abertura = fopen("$arquivo","r+");
        $ler      = fread($abertura, filesize($arquivo));
        fclose($abertura);
        $abertura = fopen("$arquivo","w+");
        $conteudo = $ler + 1 . "\r\n";
        echo $ler."+ 1";
        $gravacao = fwrite($abertura,$conteudo);
        fclose($abertura);
        header("location:index.php?return=1"); 
    }
}
